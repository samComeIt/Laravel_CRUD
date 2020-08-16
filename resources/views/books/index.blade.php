<div class="col-md-6 offset-md-3 book-desc">
    <div class="card">

    <div class="panel-group">
    <div class="panel">
       
    <a href="{{route('Book::create')}}">추가</a>
    </div>
        <form method="post" action="{{route('Book::destroy')}}">
        {!! csrf_field() !!}
        @foreach($books as $book)
        <td><img class="card-img-top" src="{{url('uploads/'.$book->filename)}}" alt="{{$book->filename}}"><td>
        <div class="card-body">
            <input type="hidden" name="bookId" value="{{$book->id}}">
            <h4 class="card-title">Book No: {{ $book->id}}</h4>
            <p class="card-text">
                Book <strong>{{ $book->name}}</strong> is written by <strong>{{ $book->author}}</strong>
            </p>
            
            <td><a href="{{ route('Book::select', ['bookId' => $book->id]) }}">자세히 보기</a></td>
            <td><button type="submit" class="btn btn-danger">삭제</button></td>
        </form>
    @endforeach
        
        </form>
        </div>
    </div>
</div>