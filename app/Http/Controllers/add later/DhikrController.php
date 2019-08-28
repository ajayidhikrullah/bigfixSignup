<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dhikr;
class DhikrController extends Controller
{
    //
    public function index(){
        $dhikr = Dhikr::all();
        // $acc = Dhikr::();
        
        return view('welcome', compact('dhikr'));
    }

}
