<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Validation\Rule;
use App\Models\Book;

class ReviewController extends Controller
{

    public function create(Book $book) {
        return view('components.create-review', ['book' => $book]);
    }
    

    public function store(Book $book){
        // store the file 
        

        $validatedData = request()->validate([
            'score' => 'required',
            'content' => 'required',
        ]);

        $validatedData['book_id'] = $book->id;
        $validatedData['user_id'] = auth()->user()->id;

        Review::create($validatedData);
        
        return redirect("/")->with('success', 'You have add a new review!');
    }
}
