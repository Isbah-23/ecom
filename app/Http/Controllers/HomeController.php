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
    public function sign_in()
    {
        return view('registration/sign-in');
    }
    public function sign_up()
    {
        return view('registration/sign-up');
    }
    public function createRoles()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        return 'Roles created successfully';
    }
}
