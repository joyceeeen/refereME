<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        ['firstname' => "Test",'lastname'=>'Admin','user_type'=>3,'password'=>Hash::make('1'),'email'=>'admin@mail.com','email_verified_at'=>Carbon::now(),'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
      ]);
    }
}
