<?php

namespace App\Http\Controllers;

use App\Http\Requests\{LoginRequest, RegisterRequest};
use App\Services\UserService;

class AuthController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->middleware('guest')->except(['logout']);
        $this->middleware('auth')->only(['logout']);
        $this->userService = $userService;
    }

    public function login()
    {
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $input = $request->validated();
        try {

            $is_auth = $this->userService->login($input);
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
        $user = $this->userService->register($input);
        return redirect('dashboard')->withSuccess('hello');

    }
    public function logout()
    {
        $this->userService->logout();
        return redirect('login')->withSuccess('hello');

    }
}
