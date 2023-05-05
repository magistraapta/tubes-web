<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function getAllBook(){
        $buku = Buku::all();
        return view('welcome', compact(['buku']));
    }
}
