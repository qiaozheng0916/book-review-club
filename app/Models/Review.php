<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'score', 'user_id', 'book_id'];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
