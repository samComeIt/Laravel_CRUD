<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

Create Contact!
<?php


?>
<!-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor -->

@for ($i = 0; $i < 2; $i++)

<form method="post" action="{{ route('Contact::store') }}"  class="myForms" enctype="multipart/form-data">
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
    <!--<button type="submit" class="xe-btn">저장</button>-->
</form>

@endfor
<button onclick="submit_forms();">SUBMIT</button>

<script>

    function submit_forms(){
        var x = document.querySelectorAll(".myForms");
        for (let i = 0; i < x.length; i++) {
           x[i].submit();
        }
    }

</script>
