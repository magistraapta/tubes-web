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
        $customer = auth()->user();
       $transactions =  transaction::create([
            'users_id' => $customer->id,
            'books_id' => $books->id,
            'transaction_code' => strtoupper(Str::random(10)),
            'amount' => $books->price,
            'status' => 'success'
        ]);
        // \Midtrans\Config::$serverKey =  env(MIDTRANS_SERVER_KEY);
        // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        // \Midtrans\Config::$isProduction = (bool) env(MIDTRANS_IS_PRODUCTION);
        // // Set sanitization on (default)
        // \Midtrans\Config::$isSanitized = (bool)  env(MIDTRANS_IS_SANITIZED);
        // // Set 3DS transaction for credit card to true
        // \Midtrans\Config::$is3ds = (bool)  env(MIDTRANS_IS_3DS);

        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => $transactions->transaction_code,
        //         'gross_amount' => $transactions->amount,
        //     ),
        //     'customer_details' => array(
        //         'first_name' => $customer->name,
        //         'last_name' => $customer->name,
        //         'email' => $customer->email,
        //     ),
        // );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);

        // $createMidtransTransaction = \Midtrans\Snap::createTransaction($params);
        
        return redirect()->route('user.success');
    }
}
