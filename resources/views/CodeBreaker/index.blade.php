@extends('./base')
@section('content')
    <div class="container">
    <div> Zaszyfrowana wiadomość: {{$message}}</div>
    <div> Odszyfrowana wiadomość: {{$decryptedMessage}}</div>
</div>
@endsection
