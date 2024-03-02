<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Country;
use App\Models\Order;
use App\Models\UserRole;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Notification;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
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
        return view('admin.user.index');
    }

    /**
     * Get customer list.
     *
     * @return object
     */
    public function getCustomerList(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('is_user',1)->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin.user.show',$row->id).'"><i  style="color:yellow !important;" class="fas fa-eye text-white font-size-22"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the user details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $countries = Country::where('status', 'Active')->get();
        $total_orders = Order::where('user_id', $id)->count();
        $total_unpaid = Order::where([
            'user_id' => $id,
            'is_paid' => 0
        ])->count();
        $user_details = User::where('id', $id)->first();
        return view('admin.user.show',compact('user_details','total_orders', 'total_unpaid', 'countries'));
    }
    /**
     * Update the user data
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->status = $request->status;
        $user->save();

        //send mail to user
        $body = 'Greeting From PIX Clipping Ltd. Your are now active user in our panel. Now you can enjoy our all feature.';
        $details['subject'] = 'Account Activation';
        $details['greeting'] = 'Hello '.$user->name;
        $details['body'] = $body;
        $details['actionText'] = null;
        $details['actionUrl'] =null;
        $details['endText'] = '';
        Notification::send($user, new SendEmailNotification($details));

        return redirect('/admin/user/'.$request->id)->with('success', __('Uuser active successfully.'));
    }
}
