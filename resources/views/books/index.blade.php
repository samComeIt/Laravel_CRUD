<div class="col-md-6 offset-md-3 book-desc">
    <div class="card">

    <div class="panel-group">
    <div class="panel">
       
    <a href="{{route('Book::create')}}">추가</a>
    </div>
        @foreach($books as $book)
        <img class="card-img-top" src="{{url('uploads/'.$book->filename)}}" alt="{{$book->filename}}">
        <div class="card-body">
        
            <h4 class="card-title">Book No: {{ $book->id}}</h4>
            <p class="card-text">
                Book <strong>{{ $book->name}}</strong> is written by <strong>{{ $book->author}}</strong>
            </p>
        @endforeach
            
        </div>
    </div>
</div>