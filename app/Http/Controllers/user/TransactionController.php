<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;
use App\Models\transaction;
use Illuminate\Support\Str;
class TransactionController extends Controller
{
    public function store(Request $request){
        $books = book::find($request->id);
        transaction::create([
            'users_id' => auth()->user()->id,
            'books_id' => $books->id,
            'transaction_code' => strtoupper(Str::random(10)),
            'amount' => $books->price,
            'status' => 'success'
        ]);

        return redirect()->route('user.success');
        // dd($request->all());
        // return "test";
    }
}
