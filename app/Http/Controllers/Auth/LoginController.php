<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * initial function
     *
     * @return login|view
     */
    public function index()
    {
        $title = 'Login';
        return view('auth/login',compact('title'));
    }

    /**
     * Login the user of the application.
     *
     * @param Request $request
     *
     * @return array
     */
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credential = auth()->attempt($credentials);
        if ($credential) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin');
            }
//            else if (auth()->user()->type == 'manager') {
//                return redirect()->route('manager.home');
//            }
            else {
                if(auth()->user()->status === 'Inactive') {
                    $this->guard()->logout();
                    return redirect()->back()->with('error', 'Sorry! your profile is under review. Once complete you will get a confirmation email.');
                } else {
                    return redirect()->route('home');
                }
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }

    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     *
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        if ($this->loggedOut($request)) {
            return $this->loggedOut($request)->with([
                'status' => 'success',
                'message' => 'Logout was successfully done',
            ]);
        } else {
            return redirect('/login');
        }
    }
}
