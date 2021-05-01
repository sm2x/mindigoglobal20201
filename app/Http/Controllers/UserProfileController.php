<?php

namespace App\Http\Controllers;

use App\UserProfile;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getUserInfo(Request $request)
     {
        
     try {
         //code...
         $user_profile = User::where('id', $request->user_id)->first();

         return $user_profile;
         
     } catch (\Throwable $th) {
         //throw $th;

         return $th;
     }
        


        return $request->all();
     }



    public function updateProfile(Request $request)
    {
        //

       


        $user_id = Auth::user()->id;

        $profile = UserProfile::updateOrCreate([
                'user_id' => $user_id
             ],[
            'user_id' => $user_id,
            // 'name' => $request->name,
            // 'bio' => $request->bio,
            'gender' => $request->gender,
            'nationality' => $request->nationality
            // 'state' => $request->state,
            // 'lga' => $request->lga,
            // 'marital_status' => $request->marital_status,
            // 'home_address' => $request->home_address,
            // 'phone1' => $request->phone1,
            // 'nok_fullname' => $request->nok_fullname,
            // 'nok_gender' => $request->nok_gender,
            // 'nok_phone' => $request->nok_phone,
            // 'nok_relationship' => $request->nok_relationship,
            // 'nok_address' => $request->nok_address,
            // 'recipient_code' => $request->recipient_code,
            // 'Auth_Code' => $request->Auth_Code,
            // 'bank_name' => $request->bank_name,
            // 'bank_code' => $request->bank_code,
            // 'account_name' => $request->account_name,
            // 'account_number' => $request->account_number,
            // 'account_type' => $request->account_type
        ]);

        return $profile;
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
