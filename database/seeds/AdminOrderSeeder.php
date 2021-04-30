<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class AdminOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insertOrIgnore([

                [
                    'status' => 'success',
                    'reference' => 'MNG'.rand(20023, 99999),
                    'amount' => '99700',
                    'paid_at' => Carbon::now(),
                    'channel' => 'system',
                    'currency' => 'NGN',
                    'ip_address' => '127.0.0.1',
                    'package' => 'Admin Package',
                    'sponsors_id' => 'MNG0001',
                    'user_id' => '10001',
                    'pack_id' => '1',
                    'pack_title' => 'Admin Package',
                    'mobile' => '0909900990',
                    'customer_id' => '10001',
                    'customer_email' => 'admin001@mindigoglobal.com',
                    'customer_code' => 'MNG0001',

                ],

                [
                    'status' => 'success',
                    'reference' => 'MNG'.rand(20023, 99999),
                    'amount' => '99700',
                    'paid_at' => Carbon::now(),
                    'channel' => 'system',
                    'currency' => 'NGN',
                    'ip_address' => '127.0.0.1',
                    'package' => 'Admin Package',
                    'sponsors_id' => 'MNG0002',
                    'user_id' => '10002',
                    'pack_id' => '1',
                    'pack_title' => 'Admin Package',
                    'mobile' => '0909900990',
                    'customer_id' => '10002',
                    'customer_email' => 'admin002@mindigoglobal.com',
                    'customer_code' => 'MNG0002',

                ],

                [
                    'status' => 'success',
                    'reference' => 'MNG'.rand(20023, 99999),
                    'amount' => '99700',
                    'paid_at' => Carbon::now(),
                    'channel' => 'system',
                    'currency' => 'NGN',
                    'ip_address' => '127.0.0.1',
                    'package' => 'Admin Package',
                    'sponsors_id' => 'MNG0003',
                    'user_id' => '10002',
                    'pack_id' => '1',
                    'pack_title' => 'Admin Package',
                    'mobile' => '0909900990',
                    'customer_id' => '10003',
                    'customer_email' => 'user003@mindigoglobal.com',
                    'customer_code' => 'MNG0003',

                ],
            
            
             ]);
            
    }
}

















