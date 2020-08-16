<form method="post" action="{{ route('Book::store') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    
    <div class="form-group">
        <td>
            <tr>이름: 
            <input type="text" name="name" value="{{ Request::old('name') }}">
            </tr>
            <tr>작가: 
            <input type="text" name="author" value="{{ Request::old('author') }}">
            </tr>
        </td>
        <label for="author">Cover:</label>
        <input type="file" class="form-control" name="bookcover"/>
    </div>
    <button type="submit" class="xe-btn">저장</button>
</form>