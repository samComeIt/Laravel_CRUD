<form method="post" action="{{ route('Book::update') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="bookId" value="{{ $bookId->id}}">
<td>이름:
    <input type="text" name="name" value="{{ $bookId->name }}" enctype="multipart/form-data">
</td>

<tr>작가: 
            <input type="text" name="author" value="{{ $bookId->author }}">
            </tr>

<td>사진:
    <img class="card-img-top" src="{{ url('uploads/'.$bookId->filename) }}" alt="{{ $bookId->filename }}">
    <input type="file" class="form-control" name="bookcover"/>
</td>
<td>
<button type="submit" class="btn btn-danger">업데이트</button>
</td>
</form>