<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            // 'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            // 'email' => ['required', 'email', Rule::unique('users', 'email')],
            // 'password' => ['required', 'min:8', 'max:20'],
        ]);

        $incomingFields["password"] = bcrypt($incomingFields["password"]);
        
        try {
            $user = User::Create($incomingFields);
            return redirect('/register/success');
        }
        catch (\Exception $e) {
            return redirect('/register');
        }

        return redirect('/register');
    }
}
