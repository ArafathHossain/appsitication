<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Notifications\VerifyRegistration;

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
    protected $redirectTo = '/';

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
     * Show registation from over right.
     */
	 
	public function showRegistrationForm()
    {
        return view('auth.register');
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
			
			'first_name' => 'required|string|max:30',
			'last_name' => 'required|nullable|max:100',
			'phone_no' => 'required',
			'street_address' => 'required',
			'email' => 'required|string|email|max:100',
			'password' => 'required|nullable',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $user = User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'username' => str_slug($request->first_name.$request->last_name),
			'phone_no' => $request->phone_no,
			'street_address' => $request->street_address,
			'ip_address' => request()->ip(),
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'remember_token' => str_random(50),
			'status' => 0,
        ]);
		
		$user->notify(new VerifyRegistration ($user));
		session()->flash('success', 'A confirmation Email has send to you. Please Check and confirm your email');
		return back();
		
    }
}
