<?php

use Illuminate\Database\Seeder;

class DirectReferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('direct_referrals')->insertOrIgnore([

            [
                'referrer_id' => '10001',
                'referree_id' => '10003',
                'referral' => 'MNG0001',
                'referree' => 'MNG0003',
                'position' => 'L',
                'weekInYear' => '1',
                'referrer_pack_id' => '1',
                'referree_pack_id' => '1',
                'referrer_bonus' => '5000',
                'referree_points' => '700',
                'referrer_track_id' => 'Ec',
                'referree_track_id' => 'cE',
            ],
            
            
             ]);
            
    }
}
