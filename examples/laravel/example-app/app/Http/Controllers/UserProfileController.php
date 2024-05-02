<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use stdClass;

class UserProfileController extends Controller
{
    public function view(Request $request)
    {
        // $profile = UserProfile::find(1);
        
        $profile = new stdClass();
        $profile->name = 'TODO';
        $profile->image = 'http://placehold.it/100x100';

        return view('profile_view', ['profile' => $profile]);
    }

    public function edit(Request $request)
    {
        $profile = new stdClass();
        $profile->name = 'TODO';
        $profile->image = 'http://placehold.it/100x100';
        
        return view('profile_edit', ['profile' => $profile]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png|max:2048',
        ]);

        $request->file('image')->storeAs(
            'images',
            $request->file('image')->hashName(),
            'public'
        );

        return response()->redirectTo('/profile');
    }
}
