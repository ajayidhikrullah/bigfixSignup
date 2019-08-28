<?php

namespace App\Http\Controllers;
use App\Signup;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function signup()
    {
        
        return view('signup');
    }

    // get the data from users
    public function store(Request $request)
    {
        $signup = new Signup;
        // dd($signup);

        $signup->email = $request['email'];
        $signup->username = $request['username'];
        $signup->uid = rand(111,999) . $request['username'];
        // $uid = 
        $signup->save();
        return redirect('signup');
    }


}