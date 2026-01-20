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
}
