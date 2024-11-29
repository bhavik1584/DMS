<?php 

namespace App\Services;
use App\Models\User;


class UserService{
    
    public function create($input){
        
        $user = User::create($input);
        
        return $user;
    }

    public function edit($id){
        
        $user = User::findOrFail($id);
        
        return $user;
    }

}


