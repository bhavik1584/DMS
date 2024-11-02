<?php

namespace App\Http\Controllers;

use App\Http\Requests\{LoginRequest, RegisterRequest};
use App\Services\AuthService;

class AuthController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->middleware('guest')->except(['logout']);
        $this->middleware('auth')->only(['logout']);
        $this->authService = $authService;
    }

    public function login()
    {
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $input = $request->validated();
        try {

            $is_auth = $this->authService->login($input);
            if ($is_auth) {
                return redirect('dashboard')->withSuccess('hello');
            } else {
                return back()->withError('invalid cradential');
            }

        } catch (\Throwable $th) {
            return back()->withError('something wrong please try again!');
        }


    }
    public function register()
    {
        return view('auth.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        $input = $request->validated();
        $user = $this->authService->register($input);
        return redirect('dashboard')->withSuccess('hello');

    }
    public function logout()
    {
        $this->authService->logout();
        return redirect('login')->withSuccess('hello');

    }
}
