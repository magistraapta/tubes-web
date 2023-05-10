<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Exception;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function getAllBook(request $request){
        if ($request->has('search')) {
            $buku = Buku::where('nama','LIKE', '%' .$request->search. '%')->paginate(4);
        } else {
            $buku = Buku::paginate(5);
        }
        
        return view('welcome', compact(['buku']));
    }

    public function getById($id){
        $buku = Buku::findOrFail($id);
        return view('detail', compact(['buku']));
    }

    public function create(){
        return view('addBook');
    }

    public function store(request $request)
    {
        $buku = Buku::create($request->except(['_token', 'submit']));
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('cover/', $request->file('foto')->getClientOriginalName());
            $buku->foto = $request->file('foto')->getClientOriginalName();
            $buku->save();
        }
        return redirect('/');
    }

    public function destroy($id){
        Buku::destroy($id);
        return redirect('/')->with('success', 'Buku berhasil dihapus');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('editBook', compact(['buku']));
    }

    public function update($id, request $request){
        Buku::find($id)->update($request);
        return redirect('/')->with('success', 'Buku berhasil diperbarui');
    }
}
