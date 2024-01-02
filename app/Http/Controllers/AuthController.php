<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Traits\Auth\HasAuth;
use App\Models\User;
use Exception;
// use NumberFormatter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    use HasAuth;

    public function loginView(){
        // $formatter =new NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        if ($request) {
            try{
            $this->authenticate($request->sanitized());
            return redirect(route('index'));
            }
            catch(Exception $e){
                return response()->json(array(
                    'success' => false,
                    'message' => 'There are incorect values in the form!',
                    'errors' => $e,
                ), 401);
            }
        }

    }
    public function registerView(): View
    {
        return view('auth.register');
    }

    public function register(StoreUserRequest $request)
    {

        $user = User::create($request->sanitized());
        if ($user) {
            $this->authenticate(['email' => $request->email, 'password' => $request->password]);
            return redirect(route('index'));
        }



    }
    public function logout(Request $request)  {
        Auth::logout();
        return redirect(route('login'));
    }

}
