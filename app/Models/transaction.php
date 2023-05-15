<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'users_id',
        'books_id',
        'amount',
        'status'
    ];

    public function book(){
        return $this->belongsTo(book::class, 'books_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
}
