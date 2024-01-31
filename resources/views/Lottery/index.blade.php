@extends('./base')
@section('content')
    <div class="container">
        Zwycięskie losy:
        @foreach($winners  as $winner)
            <div>{{$winner}}</div>
        @endforeach
    </div>
@endsection
