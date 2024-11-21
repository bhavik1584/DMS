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
                return redirect('dashboard')->withSuccess(__('auth.auth_login'));
            } else {
                return back()->withError(__('auth.failed'));
            }

        } catch (\Throwable $th) {
            return back()->withError(__('common_message.error'));
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
        return redirect('dashboard')->withSuccess(__('auth.auth_login'));

    }
    public function logout()
    {
        $this->authService->logout();
        return redirect('login')->withSuccess(__('auth.auth_logout'));

    }
}
