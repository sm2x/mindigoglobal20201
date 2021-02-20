<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            
            [
                'id' => '10001',
                'name' => 'Admin001',
                'email' => 'admin001@mindigoglobal.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret001'),
                
                'email_verified_at' => now(),
                'role' => 'admin',
               
                'user_code' => 'MNG0001',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10002',
                'name' => 'Admin002',
                'email' => 'admin002@mindigoglobal.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret002'),
              
                'email_verified_at' => now(),
                'role' => 'admin',
               
                'user_code' => 'MNG0002',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'name' => 'Slyvia Miracle',
                'email' => 'user003@mindigoglobal.com',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('secret003'),
                
                'email_verified_at' => now(),
                'role' => 'admin',
               
                'user_code' => 'MNG0003',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

   
                
          ]);
    }
}
