<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $flag = 0;
        $invoice = Invoice::where('order_id',$data['order_id'])->first();
        if($invoice){
            $flag = 1;
            $invoice->service_name = json_encode($data['service_name']);
            $invoice->comments = json_encode($data['comments']);
            $invoice->qty = json_encode($data['qty']);
            $invoice->price = json_encode($data['price']);
            $invoice->single_discount = json_encode($data['single_discount']);
            $invoice->row_sub_total = json_encode($data['row_sub_total']);
            $invoice->sub_total = $data['sub_total'];
            $invoice->discount = $data['discount'];
            $invoice->discount_type = $data['discount_type'];
            $invoice->grand_total = $data['total_price'];
        }else{
            $invoice = Invoice::create([
                'order_id'=>$data['order_id'],
                'service_name'=>json_encode($data['service_name']),
                'comments'=>json_encode($data['comments']),
                'qty'=>json_encode($data['qty']),
                'price'=>json_encode($data['price']),
                'single_discount'=>json_encode($data['single_discount']),
                'row_sub_total'=>json_encode($data['row_sub_total']),
                'discount'=>$data['discount'],
                'sub_total'=>$data['sub_total'],
                'discount_type'=>$data['discount_type'],
                'grand_total'=>$data['total_price']
            ]);
        }

        if($invoice){
            $invoice->invoice_id = 'PIXIN-'. date('ym') . '-' . sprintf('%04d', $invoice->id);
            $invoice->save();

            $order = Order::where('id',$data['order_id'])->first();
            $order->is_invoiced = 1;
            $order->price = $data['total_price'];
            $order->status = 'Processing';
            $order->save();

            //send mail to user
            $user = User::where('id', $data['user_id'])->first();
            $body = 'Greeting From PIX Clipping Ltd. Your invoice has ready against the order #PIXC-' . date('ym') . '-' . sprintf('%04d', $data['order_id']) . '. Now you check the order details and payment.';
            $details['subject'] = 'Invoice Created';
            $details['greeting'] = 'Hello ' . $user->name;
            $details['body'] = $body;
            $details['actionText'] = 'View Invoice';
            $details['actionUrl'] =     url('order/' . $data['order_id'].'/');
            $details['endText'] = '';
            Notification::send($user, new SendEmailNotification($details));

            //send mail to admin
            $admin_body = 'New invoice has created against the order #PIXC-' . date('ym') . '-' . sprintf('%04d', $data['order_id']) . '. Please review the order soon.';
            $admin_details['subject'] = 'Invoice Created';
            $admin_details['greeting'] = 'Hello ' .  auth()->user()->name;
            $admin_details['body'] = $admin_body;
            $admin_details['actionText'] = 'View Order';
            $admin_details['actionUrl'] = url('admin/order/' . $data['order_id']);
            $admin_details['endText'] = '';
            Notification::send( auth()->user(), new SendEmailNotification($admin_details));

            if($flag === 1){
                return redirect()->back()->with('success', 'Invoiced updated successfully.');
            }
            return redirect()->back()->with('success', 'Invoiced create successfully.');
        }else{
            return redirect()->back()->with('error', __('error','Invoiced create failed. Please try properly'));
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
