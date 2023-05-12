<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function getAllBook(request $request){
        if ($request->has('search')) {
            $buku = Buku::where('nama','LIKE', '%' .$request->search. '%')->paginate(4);
        } else {
            $buku = Buku::paginate(5);
        }
        
        return view('dashboard', compact(['buku']));
    }
}
