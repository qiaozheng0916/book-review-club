@extends('welcome')

@section('content')

    <div class="container">
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Create Review</h4>
        
        <form class="needs-validation" method="POST" action="/reviews/{{$book->id}}/store" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="score" class="form-label"><strong>Score</strong></label>
            <div id="starRating"></div>
            <input type="range" style="width:300px" class="form-range" min="1" max="5" step="1" name="score" id="score" value="3">
          </div>

            <div class="col-10">
                <strong><label for="content" class="form-label">Content</label></strong>
                <textarea class="form-control"  style="height: 300px" id="content" name="content" placeholder="" required></textarea>
    
                <div class="invalid-feedback">
                  Please enter your content.
                </div>
            </div>
            <br>
              <div class="d-flex gap-5">
                <button class="btn btn-primary btn-lg " type="submit">Add</button>
                <button class="btn btn-danger btn-lg" type="button" onclick="location.href='{{ url('/') }}';">Cancel</button>
            </div>
            
        </form>
      </div>
    </div>
    </div>

    <script>
        function updateStarRating(score) {
            var starRating = document.getElementById('starRating');
            starRating.innerHTML = ''; 
        

            for (var i = 0; i < score; i++) {
                starRating.innerHTML += '<i class="fa fa-star"></i>';
            }
        }
        

        document.addEventListener('DOMContentLoaded', function() {
            var initialScore = document.getElementById('score').value;
            updateStarRating(initialScore);
        });
        

        document.getElementById('score').addEventListener('input', function() {
            updateStarRating(this.value);
        });
        </script>
        
    
    <style>
        .fa-star {
            color: gold;
        }
    </style>
@endsection

