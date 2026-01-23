<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $books = Book::with(['user', 'category'])
            ->where('status', 'approved')
            ->orderBy('approved_at', 'desc')
            ->limit(8)
            ->get();

        return view('index', compact('books'));
    }
}
