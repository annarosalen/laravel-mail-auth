<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\TestMail;

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

    public function sendMail(Request $request){

        $data = $request -> validate([
            'mailText' => 'required|min:10'
        ]);

        Mail::to(Auth::user() -> email)
            ->send(new TestMail($data['mailText']));

        return redirect() ->back();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // $mail = Auth::user() -> email;

        // Mail::to ($mail) ->send(new TestMail('ciaooooooo'));

        return view('home');
    }

    
}
