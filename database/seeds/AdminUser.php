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
        ['firstname' => "Test",'lastname'=>'Admin','is_hospital'=>0,'password'=>Hash::make('1'),'email'=>'admin@mail.com','is_admin'=>'1','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],

      ]);
    }
}
