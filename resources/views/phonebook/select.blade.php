<form method="post" action="{{ route('PhoneBook::update') }}" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="exampleId" value="{{ $example->id }}">
    <td>이름:
    <input type="text" name="name" value="{{ $example->name }}">
    </td>
    <td>주소:
    <input type="text" name="address" value="{{ $example->address }}">
    </td>
    <td>생일:
    <input type="text" name="birthday" value="{{ $example->birthday }}">
    </td>
    <td>전화번호:
    <input type="text" name="phonenumber" value="{{ $example->phonenumber }}">
    </td>
    <td>사진:
    <td>
    <label for="image">사진:</label>
    <input type="original_filename" name="image">
    </td>
    
    <button type="submit" class="xe-btn">업데이트</button>
</form>