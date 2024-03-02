<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Invoice;
use App\Models\Media;
use App\Models\PathServices;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Notification;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;
use DateTime;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class CustomerOrderController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.order.index');
    }

    /**
     * get customer order list
     * @param datatable data
     * @return object
     */
    public function getOrderList(Request $request)
    {
        if ($request->ajax()) {
            $url = explode('/', URL::previousPath());
            if (end($url) === 'received') {
                $data = Order::where('status', 'Received')->latest()->get();
            } elseif (end($url) === 'review') {
                $data = Order::where('status', 'In Review')->latest()->get();
            } elseif (end($url) === 'invoiced') {
                $data = Order::where('status', 'Invoiced')->latest()->get();
            } elseif (end($url) === 'canceled') {
                $data = Order::where('status', 'Canceled')->latest()->get();
            } elseif (end($url) === 'processing') {
                $data = Order::where('status', 'Processing')->latest()->get();
            } elseif (end($url) === 'finalizing') {
                $data = Order::where('status', 'Finalizing')->latest()->get();
            } elseif (end($url) === 'completed') {
                $data = Order::where('status', 'Completed')->latest()->get();
            } elseif (end($url) === 'downloaded') {
                $data = Order::where('status', 'Downloaded')->latest()->get();
            }elseif (end($url) === 'paid') {
                $data = Order::where('is_paid', 1)->latest()->get();
            } elseif (end($url) === 'redo') {
                $data = Order::where('status', 'Redo')->latest()->get();
            } elseif (end($url) === 'closed') {
                $data = Order::where('status', 'Closed')->latest()->get();
            } elseif (end($url) === 'pending') {
                $data = Order::where('status', 'Pending')->latest()->get();
            } elseif (end($url) === 'todays') {
                $data = Order::whereDate('created_at', Carbon::today())->latest()->get();
            } elseif (end($url) === 'valid') {
                $data = Order::where('status', 'Valid')->latest()->get();
            } elseif (end($url) === 'banned') {
                $data = Order::where('status', 'Banned')->latest()->get();
            } else {
                $data = Order::latest()->get();
            }

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('uid', function ($row) {
                    $UdText = '<a href="user/' . $row->user->id . '" style="color:yellow !important;">' . $row->user->uid . '</a>';
                    return $UdText;
                })
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
                    $actionBtn = '<select class="form-select select-status" data-id="' . $row->id . '">
                                        <option>Select</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Received">Received</option>
                                        <option value="Invoiced">Invoiced</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Finalizing">Finalizing</option>
                                        <option value="Downloaded">Downloaded</option>
                                        <option value="Canceled">Canceled</option>
                                        <option value="Closed">Closed</option>
                                        <option value="Valid">Valid</option>
                                        <option value="Banned">Banned</option>
                                    </select>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'uid'])
                ->make(true);
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($order)
    {
        $order_details = Order::where('id', $order)->first();
        $total_orders = Order::where('user_id', $order_details->user_id)->count();
        $total_unpaid = Order::where('user_id', $order_details->user_id)->where('is_paid', 0)->count();
        $selected_services = PathServices::whereIn('id', json_decode($order_details->service_id))->get();
        $all_services = PathServices::where('status', 'Active')->get();
        $invoice = Invoice::where('order_id', $order_details->id)->first();
        $images = null;
        if ($order_details->media_id) {
            $images = Media::whereIn('id', json_decode($order_details->media_id))->get();
        }
        $billing_address = BillingAddress::where('user_id', $order_details->user_id)->first();
        return view('admin.order.show', compact('order_details', 'billing_address', 'total_orders', 'total_unpaid', 'selected_services', 'all_services', 'images', 'invoice'));
    }

    public function updateOrderStatus(Request $request)
    {
        $status = $request->status;
        $order_id = $request->order_id;
        if ($status) {
            $order = Order::where('id', $order_id)->first();
            $order->status = $status;
            $order->save();

            //send mail to user
            $user_data = User::where('id', $order->user_id)->first();
            $body = 'Greeting From PIX Clipping Ltd. We are happy to let you know that your Order Status has changed against the Order #' . $order->order_id .'. Your Order Status in now '.$status.'.';
            $details['subject'] = 'Order Status Updated';
            $details['greeting'] = 'Hello ' . $user_data->name;
            $details['body'] = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl'] = url('order/' . $order->id);
            $details['endText'] = 'Do you need any further assistance? Please do not hesitate to contact us! We look forward to hearing from you.';
            Notification::send($user_data, new SendEmailNotification($details));

            //send mail to admin
            $admin_body = 'Order Status Updated against the order #' . $order->order_id.'. Now Order Status in '.$status.'.';
            $admin_details['subject'] = 'Order Status Updated';
            $admin_details['greeting'] = 'Hello ' . auth()->user()->name;
            $admin_details['body'] = $admin_body;
            $admin_details['actionText'] = 'View Order';
            $admin_details['actionUrl'] = url('admin/order/' . $order->id);
            $admin_details['endText'] = '';
            Notification::send(auth()->user(), new SendEmailNotification($admin_details));
            return true;

        } else {
            return false;
        }
    }

    public function orderFinalizing(Request $request){
        if($request->output_link){
            $status = 'Completed';
            $order = Order::where('id', $request->order_id)->first();
            $order->output_link = $request->output_link;
            $order->status = $status;
            $order->save();

            //send mail to user
            $user_data = User::where('id', $order->user_id)->first();
            $body = 'Greeting From PIX Clipping Ltd. We are happy to let you know that your Order Status has changed against the Order #' . $order->order_id .'. Your Order Status in now '.$status.'. Once complete payment you can download output from output tab.';
            $details['subject'] = 'Order Status Updated';
            $details['greeting'] = 'Hello ' . $user_data->name;
            $details['body'] = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl'] = url('order/' . $order->id);
            $details['endText'] = 'Do you need any further assistance? Please do not hesitate to contact us! We look forward to hearing from you.';
            Notification::send($user_data, new SendEmailNotification($details));

            //send mail to admin
            $admin_body = 'Order Status Updated against the order #' . $order->order_id.'. Now Order Status in '.$status.'.';
            $admin_details['subject'] = 'Order Status Updated';
            $admin_details['greeting'] = 'Hello ' . auth()->user()->name;
            $admin_details['body'] = $admin_body;
            $admin_details['actionText'] = 'View Order';
            $admin_details['actionUrl'] = url('admin/order/' . $order->id);
            $admin_details['endText'] = '';
            Notification::send(auth()->user(), new SendEmailNotification($admin_details));

            return redirect('admin/orders')->with('success', 'Order status updated successfully.');
        }else{
            return redirect('admin/orders')->with('error', 'Order status updated failed.');
        }
    }
}
