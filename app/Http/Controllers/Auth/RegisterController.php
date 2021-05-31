<?php

namespace App\Http\Controllers\Auth;

use App\answers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'q1-a' => ['required'],
            'q2-a' => ['required'],
            'q3-a' => ['required'],
            'q4-a' => ['required'],
            'q5-a' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    protected function FormFill(array $data)
    {

        $answers = new answers;
        $answers->user_id = Auth::user()->id;
        $answers->question_id = 1;
        $answers->ans= $data['q1-a'];
        $answers->save();

        $answers = new answers;
        $answers->user_id = Auth::user()->id;
        $answers->question_id = 2;
        $answers->ans= $data['q2-a'];
        $answers->save();

        $answers = new answers;
        $answers->user_id = Auth::user()->id;
        $answers->question_id = 3;
        $answers->ans= $data['q3-a'];
        $answers->save();

        $answers = new answers;
        $answers->user_id = Auth::user()->id;
        $answers->question_id = 4;
        $answers->ans= $data['q4-a'];
        $answers->save();

        $answers = new answers;
        $answers->user_id = Auth::user()->id;
        $answers->question_id = 5;
        $answers->ans= $data['q5-a'];
        $answers->save();
    }
}
