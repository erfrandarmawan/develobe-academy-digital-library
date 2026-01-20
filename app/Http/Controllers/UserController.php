<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();

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
}
