<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhintracoController extends Controller
{
    public function about(){
        return view('phintracoGroup');
    }
}
