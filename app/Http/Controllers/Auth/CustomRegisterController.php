<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Notifications\VerifyEmailNotification;

class CustomRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin'], // Ensure 'role' is either 'user' or 'admin'.
        ]);
    }

    protected function create(array $data)
    {
        $roleMapping = [
            'admin' => 1,
            'user' => 2, 
        ];

        $roleValue = $roleMapping[$data['role']] ?? 2; // Default to 'user' if role is not found.

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $roleValue, // Set the role value based on the mapping.
        ]);

        // Send the email verification notification
        //$user->notify(new VerifyEmailNotification);
        
        // Trigger the Registered event
        event(new Registered($user));

        return $user;
    }
}