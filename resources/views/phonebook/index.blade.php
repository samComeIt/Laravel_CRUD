<div class="panel-group">
    <div class="panel">
        <a href="{{ route('PhoneBook::create') }}" class="xe-btn xe-btn-danger-outline">추가</a>
    </div>

    @foreach($examples as $example)
        
        <form method="post" action="{{route('PhoneBook::delete')}}">
        {!! csrf_field() !!}
        {{$example->name}}
        <td><input type="hidden" name="exampleId" value="{{$example->id}}"></td>
        
        <td><a href="{{ route('PhoneBook::select', ['exampleId' => $example->id]) }}">자세히 보기</a></td>
        <td><button type="submit" class="btn btn-danger">Delete</button></td>
        </form>
    @endforeach

</div>
