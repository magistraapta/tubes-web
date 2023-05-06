<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Exception;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function getAllBook(){
        $buku = Buku::all()->take(4);
        return view('welcome', compact(['buku']));
    }

    public function getById($id){
        $buku = Buku::findOrFail($id);
        return view('detail', compact(['buku']));
    }

    public function create(){
        return view('addBook');
    }

    public function store(request $request){
        Buku::create($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function destroy($id){
        Buku::destroy($id);
        return redirect('/')->with('success', 'data berhasil dihapus');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('editBook', compact(['buku']));
    }

    public function update($id, request $request){
        Buku::find($id)->update($request->except(['_token', 'submit']));
        return redirect('/');
    }
}
