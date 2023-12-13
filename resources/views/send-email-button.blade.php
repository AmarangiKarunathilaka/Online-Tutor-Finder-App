@if(session('message'))
    <div>{{ session('message') }}</div>
@endif

<form action="{{ route('send.email') }}" method="POST">
    @csrf
    <button type="submit" name="button" value="accept">Accept</button>
    <button type="submit" name="button" value="remove">Remove</button>
</form>