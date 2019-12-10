<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Roles;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = '/home';

    /**
     * Check user's role and redirect user based on their role
     * @return
     */
    public function authenticated()
    {
        $user = Auth::user();

        if($user->role_id == 1)
        {
            return redirect()->route('admin.index');
        }
        elseif($user->role_id == 2){
            return redirect()->route('customer');
        }
        elseif($user->role_id == 3){
            return redirect()->route('finance.index');
        }
        elseif($user->role_id == 4){
            return redirect()->route('maintenance.index');
        }
        elseif($user->role_id == 5){
            return redirect()->route('head_maintenance.index');
        }
        elseif($user->role_id == 6){
            return redirect()->route('inkoper.index');
        }
        elseif($user->role_id == 7){
            return redirect()->route('customer.index');
        }

        return redirect('/');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
