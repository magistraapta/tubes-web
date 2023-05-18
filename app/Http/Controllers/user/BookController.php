<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index(){
        $books = book::all()->take(4);
        return view('user.index', ['books' => $books]);
    }

    public function show($id){
        $books = book::find($id);
        return view('user.detail-book', ['books' => $books]);
    }
    
}
