Welcome to Contact!

<div class="panel">
        <a href="{{ route('Contact::create') }}" class="xe-btn xe-btn-danger-outline">추가</a>

        @foreach($contacts as $contact)
            {{$contact->name}}
        @endforeach
</div>
