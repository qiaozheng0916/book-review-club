<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  </head>
<body>
    @include('layouts.header')
    
    <div class="container">
        <a style="margin:20px" href="/" class="btn btn-danger rounded-pill px-3"><- Back</a>

        <article class="blog-post">
            <h3 class="display-6 link-body-emphasis mb-3">{{ $book->title}}</h3>

            <img style="margin-bottom:40px" src="/{{ $book->cover}}">
            
            <strong><p class="blog-post-meta">Publication Data</p></strong>
            <p><span style="font-size: 16px" class="badge bg-success-subtle text-success-emphasis rounded-pill">{{$book->publication_date}}</span></p>
            
            <strong><p class="blog-post-meta">Category: </p></strong>
            <p class="blog-post-meta"><span style="font-size: 16px" class="badge bg-info text-info-emphasis rounded-pill">{{$book->category->category}}</span></p>
            <strong><p class="blog-post-meta">Details</p></strong>
            <p class="blog-post-meta">{{ $book -> details}}</p>
        </artcle>
    </div>

    @include('components.review')

    @include('layouts.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </body>
    </html>