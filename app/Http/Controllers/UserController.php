<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $user = auth()->user();

        // Admin can see all books
        if ($user->role === 'admin') {
            $users = User::orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            return redirect('books.index');
        }

        return view('panel.users.index', compact('users'));
    }

    public function handleBlock(User $user){
        $user->update([
            'status' => 0
        ]);

        return back()->with('success', 'User berhasil diblokir!');
    }

    public function handleUnblock(User $user){
        $user->update([
            'status' => 1
        ]);

        return back()->with('success', 'User berhasil diaktifkan kembali!');
    }

    public function showProfileForm(){
        return view('panel.profile.index');
    }

    public function handleUpdateProfile(Request $request){
        // Get current user data
        $user = auth()->user();

        // Validate input
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        // Update data
        $user->name = $data['name'];

        // Handle avatar upload
        if ($request->hasFile('image')) {
            // delete old file
            if ($user->avatar_path) {
                Storage::delete('public/' . $user->avatar_path);
            }

            $path = $request->file('image')->store('avatars', 'public');
            $user->avatar_path = $path;
        }

        // Save to database
        $user->save();

        // Return response
        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
