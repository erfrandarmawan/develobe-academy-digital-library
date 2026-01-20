<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        $user = Auth::user();

        // Admin can see all books
        if ($user->role === 'admin') {
            $books = Book::with(['user', 'category'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        } else {
            // User sees only their own books
            $books = Book::with(['user', 'category'])
                ->where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }

        return view('panel.books.index', compact('books'));
    }
}
