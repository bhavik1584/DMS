<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;

class LoginController extends Controller
{
    public function login(UserRequest $request){
        try {

            $inputs = $request->except('_token');
            ['email' => $email,'password'=> $password] = $inputs;
            $is_auth = Auth::attempt($inputs);
            if($is_auth){
                return redirect('dashboard')->withSuccess('hello');
            }
            else {
                return back()->withError('invalid cradential');
            }

        } catch (\Throwable $th) {
             return back()->withError('something wrong please try again!');
        }
        
    }
}
