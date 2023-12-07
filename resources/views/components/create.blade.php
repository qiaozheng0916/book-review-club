@extends('welcome')

@section('content')

    <div class="container">
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Add New Book</h4>
        <form class="needs-validation" method="POST" action="/admin/add" enctype="multipart/form-data">
          @csrf
          <div class="row g-3">
            <div class="col-8">
              <strong><label for="title" class="form-label">Title</label></strong>
              <input type="text" class="form-control" id="title" name="title" placeholder="" value="" required>
              <div class="invalid-feedback">
                Title is required.
              </div>
            </div>
            <div class="col-8">
                <strong><label for="author" class="form-label">Author</label></strong>
                <input type="text" class="form-control" id="author" name="author" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Title is required.
                </div>
            </div>

            <div class="col-8">
                <strong><label for="publication_date" class="form-label">Publication Date</label></strong>
                <input type="date" class="form-control" id="publication_date" name="publication_date" placeholder="" required>
                <div class="invalid-feedback">
                  Please enter Publication Date.
                </div>
            </div>
            
            <div class="col-8">
                @php
                    $categories = \App\Models\Category::all();
                @endphp
                
                <strong><label for="category_id" class="form-label">Category</label></strong>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Choose...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->category}}</option>
                @endforeach

                </select>
                
                <div class="invalid-feedback">
                  Please select a keyword.
                </div>
            </div>

            <div class="col-6">
                <strong><label for="body" class="form-label">Cover</label></strong>
                <input type="file" class="form-control form-control-sm" name="cover">
              </div>

            <div class="col-10">
                <strong><label for="details" class="form-label">Details</label></strong>
                <textarea class="form-control"  style="height: 300px" id="details" name="details" placeholder="" required></textarea>
    
                <div class="invalid-feedback">
                  Please enter your content.
                </div>
            </div>

              <div class="d-flex gap-5">
                <button class="btn btn-primary btn-lg " type="submit">Add</button>
                <button class="btn btn-danger btn-lg" type="button" onclick="location.href='{{ url('/') }}';">Cancel</button>
            </div>
            
        </form>
      </div>
    </div>
    </div>

@endsection
