<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    // Show the profile edit form


    // Handle the profile update
    public function update(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'about' => 'nullable|string',
            'company' => 'nullable|string',
            'job' => 'nullable|string',
            'country' => 'nullable|string',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        // Update the user profile in the database
        $user = auth()->user();
        $user->update([
            'name' => $request->fullName,
            'about' => $request->about,
            'universitas' => $request->company,
            'pekerjaan' => $request->job,
            'negara' => $request->country,
            'email' => $request->email,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function updatePassowrd(Request $request)
    {
        $request->validate([
            "password" => "required",
            "newpassword" => "required|min:4",
            "renewpassword" => "required|same:newpassword",
        ]);


        // Update the user profile in the database
        if (!Hash::check($request->currentPassword, auth()->user()->password)) {
            dd($request->currentPassword);
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        $user = auth()->user();
        $user->update([
            'password' => Hash::make($request->newPassword),
        ]);
        // Redirect with success message
        return redirect()->back()->with('success', 'Password updated successfully');
    }
}
