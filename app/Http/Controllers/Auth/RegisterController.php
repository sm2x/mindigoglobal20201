<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\RefferalBonus;
use App\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/choose';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_code' => ['exists:users,user_code'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $regCode = "MNG" .rand(11100,999999);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_code' => $regCode,
            'password' => Hash::make($data['password']),
        ]);



        
        $sponsors_data = User::where('user_code', $data['user_code'])->first();



        $notification = Notificaiton::create([
            '_for' => $sponsor_data->id,
            'title' => "New Registration",
            'log' => 'Someone just signed up with your code'
        ]);
        
        $notification = Notificaiton::create([
            '_for' => $user->id,
            'title' => "Welcome",
            'log' => 'You just signed up welcome to Mindigoglobal'
        ]);


        $weekNo = Carbon::now()->weekOfYear;

        // $weekNo = $dt->weekOfYear();





        $referral_bonus = ReferralBonus::Create([
            'referrer_id' => $sponsors_data->id,
            'referree_id' => $user->id,
            'referral' => $sponsors_data->user_code,
            'referree' => $regCode,
            'weekInYear' => $weekNo,
            
        ]);



        return $user;

    }
}






