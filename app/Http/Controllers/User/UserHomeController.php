<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Country;
use App\Models\Order;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class UserHomeController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->status === 'Inactive') {
            $this->guard()->logout();
            return redirect('login')->with('success', 'Successfully verified your email. Now your profile is under review. Once complete you will get a confirmation email.');
        }
        return view('user.dashboard');
    }

    /**
     * Show the user profile.
     *
     * @return object
     */
    public function showProfile()
    {
        $countries = Country::where('status', 'Active')->get();
        $total_orders = Order::where('user_id', auth()->user()->id)->count();
        $total_unpaid = Order::where([
            'user_id' => auth()->user()->id,
            'is_paid' => 0
        ])->count();
        return view('user.profile.show', compact('total_orders', 'total_unpaid', 'countries'));
    }

    /**
     * update the user profile.
     *
     * @return boolean
     */
    public function updateProfile(Request $request)
    {
//     dd($request->input());
        $data = $request->except('_token');

        $billingAddress = BillingAddress::where('user_id', auth()->user()->id)->first();
        if ($billingAddress) {
            $billingAddress->bill_to = $data['bill_to'];
            $billingAddress->billing_email = $data['billing_email'];
            $billingAddress->billing_phone = $data['billing_phone'];
            $billingAddress->vat_id = $data['vat_id'];
            $billingAddress->website_url = $data['website_url'];
            $billingAddress->billing_address = $data['billing_address'];
            $billingAddress->billing_city = $data['billing_city'];
            $billingAddress->billing_state = $data['billing_state'];
            $billingAddress->billing_country_id = $data['billing_country_id'];
            $billingAddress->billing_post_code = $data['billing_post_code'];
            $billingAddress->save();

        } else {
            $billingAddress = BillingAddress::create([
                'user_id' => auth()->user()->id,
                'bill_to' => $data['bill_to'],
                'billing_email' => $data['billing_email'],
                'billing_phone' => $data['billing_phone'],
                'vat_id' => $data['vat_id'],
                'website_url' => $data['website_url'],
                'billing_address' => $data['billing_address'],
                'billing_city' => $data['billing_city'],
                'billing_state' => $data['billing_state'],
                'billing_country_id' => $data['billing_country_id'],
                'billing_post_code' => $data['billing_post_code']
            ]);

        }
        if ($billingAddress) {
            $user = User::find(auth()->user()->id);
            $user->name = $data['name'];
            $user->phone = $data['phone'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->state = $data['state'];
            $user->country_id = $data['country_id'];
            $user->post_code = $data['post_code'];
            $user->billing_address_id = $billingAddress->id;
            $user->save();

            return redirect('/home/profile')->with('success', __('Billing address updated successfully. You can create order now.'));
        }

    }

}
