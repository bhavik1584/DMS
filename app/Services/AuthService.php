<?php

namespace App\Services;
use Auth;
use App\Models\User;

class AuthService
{
   public function login($input)
   {

      $is_auth = Auth::attempt($input);

      return $is_auth;

   }

   public function register($input){
       $user = User::create($input);

       if ($user) {
           Auth::login($user);
           return $user;
       }
   }

   public function logout(){
      Auth::logout();
      return true;
   }
}


