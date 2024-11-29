<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'bhavik',
            'middle_name'=>'v',
            'last_name'=>'sapariya',
            'mobile_no'=>'7990786120',
            'address'=>'new rameshwar street no 7',
            'email'=>'bhaik@123',
            'password'=>Hash::make('123456'),
        ]);
    }
}
