<?php

namespace App\Http\Controllers\User;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Invoice;
use App\Models\Media;
use App\Models\Order;
use App\Models\PathServices;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\DataTables;
use DateTime;
class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.order.index');
    }

    /**
     * get order list
     * @param dataTable data
     * @return object
     */
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $url = explode('/', URL::previousPath());
            if (end($url) === 'invoiced') {
                $data = Order::where('user_id', auth()->user()->id)->where('status', 'Invoiced')->latest()->get();
            }else if (end($url) === 'payments') {
                $data = Order::where('user_id', auth()->user()->id)->where('is_paid', 1)->latest()->get();
            }else if (end($url) === 'redo') {
                $data = Order::where('user_id', auth()->user()->id)->where('status', 'Redo')->latest()->get();
            }else{
                $data = Order::where('user_id', auth()->user()->id)->latest()->get();
            }

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('submitted', function ($row) {
                    $datetime_1 = $row->created_at;
                    $datetime_2 = date('Y-m-d H:i:s');

                    $start_datetime = new DateTime($datetime_1);
                    $diff = $start_datetime->diff(new DateTime($datetime_2));
                    $submittedHtml = '';

                    if ($diff->y > 0 && $diff->y < 1) {
                        $submittedHtml = $diff->y . ' years ago';
                    } elseif ($diff->m > 0 && $diff->m < 12) {
                        $submittedHtml = $diff->m . ' months ago';
                    } elseif ($diff->days > 0 && $diff->days < 30) {
                        $submittedHtml = $diff->days . ' days ago';
                    } elseif ($diff->h > 0 && $diff->h < 60) {
                        $submittedHtml = $diff->h . ' hours ago';
                    } elseif ($diff->i > 0 && $diff->i < 60) {
                        $submittedHtml = $diff->i . ' minutes ago';
                    } elseif ($diff->s > 0 && $diff->s < 60) {
                        $submittedHtml = $diff->s . ' seconds ago';
                    }
                    return $submittedHtml;
                })
                ->addColumn('turnaround', function ($row) {
                    $turnaroundText = $row->turnaround . ' Hours';
                    return $turnaroundText;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/order/'.$row->id.'" class="text-center d-block"><i  style="color:yellow !important;" class="fas fa-eye text-white font-size-22"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'uid'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->user()->billing_address_id) {
            return redirect()->route('home.profile')->with('error', __('Sorry! update profile and billing address at first'));
        }
        $pathServices = PathServices::where('status', 'active')->get();
        return view('user.order.create', compact('pathServices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $create = Order::create([
            'job_title' => $data["job_title"],
            'user_id' => auth()->user()->id,
            'service_id' => json_encode($data["service_id"]),
            'image_quantity' => $data["image_quantity"],
            'instruction' => $data["instruction"],
            'image_complexity' => $data["image_complexity"],
            'return_file_extension' => json_encode($data["return_file_extension"]),
            'turnaround' => $data["turnaround"],
            'image_link' => json_encode($data["image_link"])
        ]);

        $media_ids = [];
        if ($request->hasFile('upload_files')) {

            $files = $request->file('upload_files');
            foreach ($files as $key => $file) {
                $path = '/images/order/' . $create->id.'/';
                $fileData = Helper::uploadDocument($path, $file);
                $media_create = Media::create([
                    'user_id' => auth()->user()->id,
                    'file_original_name' => $file->getClientOriginalName(),
                    'file_name' => microtime() . '_' . $file->getClientOriginalName(),
                    'filePath' => $fileData['filePath'],
                    'fileFullPath' => $fileData['fileFullPath'],
                    'extension' => $file->getClientOriginalExtension(),
                    'type' => 'image',
//                     'file_size'=>$file->getSize() ? $file->getSize():null
                     'file_size'=>null
                ]);
                if($media_create){
                    array_push($media_ids,$media_create->id);
                }
            }
        }


        if ($create) {
            $create->order_id = 'PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id);
            if($media_ids){
                $create->media_id = json_encode($media_ids);
            }
            $create->save();

            //send mail to user
            $body = 'Greeting From PIX Clipping Ltd. Your order #PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id) . ' has submitted successfully. Your order status in now Received. Please wait while our team will review your order soon.';
            $details['subject'] = 'Order Submitted';
            $details['greeting'] = 'Hello ' . auth()->user()->name;
            $details['body'] = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl'] = url('/order/' . $create->id.'/');
            $details['endText'] = '';
            Notification::send(auth()->user(), new SendEmailNotification($details));

            //send mail to admin
            $admin_user = User::where('is_admin', 1)->first();
            $admin_body = 'New order #PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id) . ' has submitted. Please review the order soon.';
            $admin_details['subject'] = 'Submitted New Order';
            $admin_details['greeting'] = 'Hello ' . $admin_user->name;
            $admin_details['body'] = $admin_body;
            $admin_details['actionText'] = 'View Order';
            $admin_details['actionUrl'] = url('/admin/order/' . $create->id);
            $admin_details['endText'] = '';
            Notification::send($admin_user, new SendEmailNotification($admin_details));

            return view('user.order.order-success', compact('create'));
        } else {
            return view('user.order.order-success', compact('create'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order_details = Order::where('id', $order->id)->first();
        $total_orders = Order::where('id', $order->id)->count();
        $total_unpaid = Order::where(['id' => $order->id, 'is_paid' => 0])->count();
        $selected_services = PathServices::whereIn('id', json_decode($order_details->service_id))->get();
        $invoice = Invoice::where('order_id',$order_details->id)->first();
        $bill_from = User::where('is_admin',1)->first();
        $images = null;
        $redo_images = null;
        if ($order_details->media_id) {
            $redo_images = Media::whereIn('id', json_decode($order_details->media_id))->get();
        }
        if ($order_details->redo_media_id) {
            $redo_images = Media::whereIn('id', json_decode($order_details->redo_media_id))->get();
        }
        $billing_address = BillingAddress::where('user_id', $order_details->user_id)->first();
        return view('user.order.show', compact('order_details', 'total_orders', 'total_unpaid', 'selected_services', 'images','redo_images','invoice','bill_from','billing_address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * Add redo
     * @param request data
     * @return boolean
    **/

    public function addRedo(Request $request){
        $data = $request->except('_token');
        if($data->invoice_id){
            $order = Order::where('id',$data->invoice_id)->frist();
            $order->redo_instruction = $data->redo_instruction;
            if(isset($data->image_link)){
                $order->redo_image_link = json_encode($data["image_link"]);
            }
            $media_ids = [];
            if ($request->hasFile('upload_files')) {
                $files = $request->file('upload_files');
                foreach ($files as $key => $file) {
                    $path = '/images/order/' . $order->id.'/redo/';
                    $fileData = Helper::uploadDocument($path, $file);
                    $media_create = Media::create([
                        'user_id' => auth()->user()->id,
                        'file_original_name' => $file->getClientOriginalName(),
                        'file_name' => microtime() . '_' . $file->getClientOriginalName(),
                        'filePath' => $fileData['filePath'],
                        'fileFullPath' => $fileData['fileFullPath'],
                        'extension' => $file->getClientOriginalExtension(),
                        'type' => 'image',
                        'file_size'=>null
                    ]);
                    if($media_create){
                        array_push($media_ids,$media_create->id);
                    }
                }
            }
            if($media_ids){
                $order->media_id = json_encode($media_ids);
            }
            $order->save();

            //send mail to user
            $body = 'Greeting From PIX Clipping Ltd. Your successfully submitted redo against the order #'.$order->order_id. '. Please be a patience our team will review your redo ASAP.';
            $details['subject'] = 'Redo Submitted';
            $details['greeting'] = 'Hello ' . auth()->user()->name;
            $details['body'] = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl'] = url('/order/' . $order->id.'/');
            $details['endText'] = '';
            Notification::send(auth()->user(), new SendEmailNotification($details));

            //send mail to admin
            $admin_user = User::where('is_admin', 1)->first();
            $admin_body = 'New redo  submitted against the #'.$order->order_id. '. Please review the redo ASAP.';
            $admin_details['subject'] = 'Submitted New Redo';
            $admin_details['greeting'] = 'Hello ' . $admin_user->name;
            $admin_details['body'] = $admin_body;
            $admin_details['actionText'] = 'View Order';
            $admin_details['actionUrl'] = url('/admin/order/' . $order->id);
            $admin_details['endText'] = '';
            Notification::send($admin_user, new SendEmailNotification($admin_details));
            return redirect()->back()->with('success', __('success','Redo submitted Successfully.'));

        }else{
            return redirect()->back()->with('error', __('error','failed. Please try properly.'));
        }

    }
}
