Create Contact!
<form method="post" action="{{ route('Contact::store') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <td>이름:
        <input type="text" name="name" value="{{ Request::old('name') }}">
    </td>

    <td>전화번호:
        <input type="text" name="phonenumber" value="{{ Request::old('phonenumber')}}">
    </td>

    <td>
        <label for="image">사진:</label>
        <input type="file" name="contactImage">
    </td>
    <button type="submit" class="xe-btn">저장</button>
</form>