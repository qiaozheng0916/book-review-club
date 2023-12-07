<div class="container">
    <hr>

    <h3 class="h3">Reviews <a class="btn btn-success" href="/reviews/{{$book->id}}/create">Add New Review</a></h3>
    
    <table class="table table-hover w-75">
        <tbody> 
            @foreach ($book->reviews as $review)
            
            <tr>
                <td>
                <div class="col">
                    <div class="card">
                    <div class="row">
                        <div class="col-md-2 imgContainer">
                            <img height="100" width="100" src="/images/avatar.jpg">
                        </div>
                        <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">{{$review->author->name}}</h5>
                            <div>
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fa fa-star {{ $i < $review->score ? 'filled' : '' }}"></i>
                                @endfor
                            </div>                            
                            <p class="card-text">{{ $review->content }}</p>
                            <p class="card-text"><small class="text-body-secondary"><time>{{$review->created_at}}</time></small></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </td>

                @endforeach
            </tr>
        </tbody>
    </table>
</div>


<style>
.imgContainer {
    padding-left: 40px;
    padding-top: 20px;
}
.filled {
    color: gold;
}
</style>
