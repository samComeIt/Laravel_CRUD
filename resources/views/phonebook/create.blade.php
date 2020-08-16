<form method="post" action="{{ route('PhoneBook::store') }}">
    {!! csrf_field() !!}
    <td>이름:
    <input type="text" name="name" value="{{ Request::old('name') }}">
    </td>
    <td>주소:
    <input type="text" name="address" value="{{ Request::old('address') }}">
    </td>
    <td>생일:
    <input type="text" name="birthday" value="{{ Request::old('birthday') }}">
    </td>
    <td>전화번호:
    <input type="text" name="phonenumber" value="{{ Request::old('phonenumber') }}">
    </td>
    
    <td>
    <label for="image">사진:</label>
    <input type="file" name="bookcover">
    </td>
    <button type="submit" class="xe-btn">저장</button>
</form>
