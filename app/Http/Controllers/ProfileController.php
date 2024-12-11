<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function uploadPhoto(Request $request): RedirectResponse
{
    // Validasi file
    $request->validate([
        'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Maks 2 MB
    ]);

    
    if ($request->hasFile('profile_photo')) {
        // Simpan file ke storage/public/profile_photos
        $path = $request->file('profile_photo')->store('profile_photos', 'public');

        // Update kolom profile_photo di database
        $user = $request->user();
        $user->profile_photo = $path;
        $user->save();
        
        return back()->with('success', 'Profile photo updated successfully.');
    }

    return back()->with('error', 'No file uploaded.');
}


}