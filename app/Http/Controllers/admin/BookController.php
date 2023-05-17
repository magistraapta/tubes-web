<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(){
        $books = book::all();
        return view('admin.books', ['books'=>$books]);
    }

    public function create(){
        return view('admin.books-create');
    }

    public function store( request $request){
        $data = $request->except('_token');

        $request->validate([
            'title'=>'required|string',
            'author'=>'required|string',
            'cover'=>'required|image|mimes:jpeg,jpg,png',
            'description'=>'required|string',
            'price'=> 'required|integer',
        ]);

        $cover = $request->cover;
        

        $originalCoverName = Str::random(10).$cover->getClientOriginalName();

        
        $cover->storeAs('public/thumbnail', $originalCoverName);
        $data['cover'] = $originalCoverName;
        book::create($data);
        return redirect()->route('admin.books')->with('success', 'buku berhasil ditambahkan');
    }

    public function edit($id){

        $books = book::find($id);
        return view('admin.book-edit', ['books' => $books]);
    }

    public function update(request $request, $id){
        $data = $request->except('_token');

        $request->validate([
            'title'=>'required|string',
            'author'=>'required|string',
            'cover'=>'required|image|mimes:jpeg,jpg,png',
            'description'=>'required|string',
            'price'=> 'required|integer',
        ]);

        $book = book::find($id);

        if ($request->cover) {
            $cover = $request->cover;
            $originalCoverName = Str::random(10).$cover->getClientOriginalName();
            $cover->storeAs('public/cover', $originalCoverName);
            $data['cover'] = $originalCoverName;

            Storage::delete('public/cover'.$book->cover);
        }

        $book->update($data);
        return redirect()->route('admin.books')->with('success', 'buku berhasil diedit');
    }

    public function destroy($id){
        book::find($id)->delete();
        return redirect()->route('admin.books')->with('success', 'buku berhasil dihapus');
    }
}
