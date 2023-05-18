<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index(){
        $books = book::all();
        return view('user.index', ['books' => $books]);
    }
    
}
