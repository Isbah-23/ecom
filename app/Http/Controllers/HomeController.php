<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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
    public function virtual_reality()
    {
        return view('sidebarlinks/virtual-reality');
    }
    public function rtl()
    {
        return view('sidebarlinks/rtl');
    }
    public function notifications()
    {
        return view('sidebarlinks/notifications');
    }
    public function profile()
    {
        return view('sidebarlinks/profile');
    }
    public function register(Request $request)
    {
        return view('auth/register',['request'=>$request]);
    }
    public function login(Request $request)
    {
        return view('auth/login',['request'=>$request]);
    }
    public function createRoles()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        return 'Roles created successfully';
    }
}
