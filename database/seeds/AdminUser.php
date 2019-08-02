<?php

use Illuminate\Database\Seeder;
use Hash;
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
        ['firstname' => "Test",'lastname'=>'Admin','password'=>Hash::make('1'),'email'=>'admin@mail.com','is_admin'=>'1','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],

      ]);
    }
}
