<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/dashboard';

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
     * Return the failed login response instance.
     * 
     * @return Response
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return back()->withInput()->with('error', __('auth.failed'));
    }

    /**
     * Redirect to login page after logout
     * 
     * @return Response
     */
    protected function loggedOut(Request $request)
    {
        return redirect()->intended('/auth/login');
    }

}
