<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaction;

class TransactionController extends Controller
{
    public function index(){
        $transactions = transaction::with([
            'book',
            'User'
        ])->get();
        return view('admin.transaction', ['transactions'=> $transactions]);
    }


}
