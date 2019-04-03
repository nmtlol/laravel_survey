<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function db_ages()
    {
        $ages = DB::table('ages')->get();
        return view('index', compact('ages'));
    }
}
