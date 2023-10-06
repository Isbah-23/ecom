<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }
    public function dashboard()
    {
        return view('sidebarlinks/dashboard');
    }
    public function tables()
    {
        return view('sidebarlinks/tables');
    }
    public function billing()
    {
        return view('sidebarlinks/billing');
    }
}
