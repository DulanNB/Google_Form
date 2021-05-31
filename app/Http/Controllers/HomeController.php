<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        $users = DB::table('answers')
            ->select('answers.*','questions.question')
            ->leftJoin('questions','questions.id','=','answers.question_id')
            ->leftJoin('users','users.id','=','answers.user_id')
            ->where('users.id','=',Auth::user()->id )
            ->get();


        return view('home', compact('widget','users'));
    }
}
