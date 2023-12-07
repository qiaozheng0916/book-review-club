@extends('welcome')

@section('content')
 
<div class="album bg-body-tertiary">
  <div class="container">

    @include('components.dropdown-category')

    @if ($books)
      <h2> There are no books in this category at the moment.</h2>
    @endif

    @foreach ( $books as $book)

    @if ($loop->iteration % 4 == 1)
      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3 py-3">
    @endif
      <div class="col">
        <div class="card shadow-sm">
            <img style="margin: 0 20px 0 20px" src="/{{ $book -> cover}}">
            <div class="card-body">
                <strong>Title:</strong>
                <p class="card-text">{{ $book -> title}}</p>
                
                <strong>Author:</strong>
                <p class="card-text">{{ $book -> author}}</p>
                
                <strong>Publication Date:</strong>
                <p class="card-text">{{ $book -> publication_date}}</p>
                
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-primary" onclick="location.href='/book/{{ $book->id }}'">View</button>
                @if(Auth::user() && Auth::user()->is_admin)
                    <button type="button" class="btn btn-success" onclick="location.href='/admin/books/{{ $book->id }}/edit'">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="location.href='/admin/delete/{{ $book->id }}'">Delete</button>
                @endif
                </div>
            </div>
        </div>
      </div> 
    @if ($loop->iteration % 4 == 0 || $loop->last)
      </div>
    @endif
    @endforeach
    {{ $books->links('pagination::bootstrap-5')}}
  </div>
</div>
@endsection

