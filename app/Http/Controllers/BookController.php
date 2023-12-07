<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function show(Book $book){
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function create(){

        return view('components.create');
    }

    public function store(){
        // store the file 

        $validatedData = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'details' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'publication_date' => 'required',
        ]);

        if (request()->hasFile('cover')) {
            $validatedData['cover'] = request()->file('cover')->store('public');
        }

        Book::create($validatedData);
        
        return redirect("/")->with('success', 'You have add a new book!');
    }

    public function delete(Book $book)
    {
        $book->delete();

        return redirect()->back()->with('success', 'Book deleted successfully');
    }

    public function edit(Book $book)
    {
        return view('components.edit', ['book' => $book]);
    }
    
    public function update(Book $book)
    {
        $validatedData = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'details' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'publication_date' => 'required',
        ]);

        if (request()->hasFile('cover')) {
            $validatedData['cover'] = request()->file('cover')->store('public');
        }

        $book->update($validatedData);
        
        return redirect("/")->with('success', 'You have updated a book!');
    }
}
