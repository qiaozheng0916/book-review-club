<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $with = ['category'];

    protected $fillable = ['title', 'author', 'cover', 'category_id', 'details', 'publication_date'];

    public function index(){
        return Book::lateset()->paginate(9);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class)->latest();
    }
}
