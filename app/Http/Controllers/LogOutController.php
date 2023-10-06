<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function index()
    {
        session_start(); 
        session_destroy(); 
        return redirect()->route('site.index');
    }
}
