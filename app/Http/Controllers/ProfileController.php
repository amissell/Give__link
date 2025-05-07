<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('partials.profile', [
            'user' => Auth::user()
        ]);
    }
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|max:2048',
        ]);
        $user = Auth::user();
        
        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }
        
        $path = $request->file('profile_photo')->store('profile_photos', 'public');
        $user->profile_photo = $path;
        $user->save();
        
        return back()->with('success', 'Profile photo updated successfully.');
    }
}
