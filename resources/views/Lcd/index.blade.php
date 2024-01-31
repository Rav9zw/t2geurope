@extends('./base')
@section('content')
    <div class="container">
        <div>
            <form action="{{route('lcdNumber')}}" method="Post">
                @csrf
                <input type="text" name="number">
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
            @if($errors->has('number'))
                <div class="alert alert-danger">{{ $errors->first('number') }}</div>
            @endif
        </div>
        <div class="d-flex">
            @if(!is_null($lcdNumber))
                @foreach($lcdNumber as $digit)
                    <div class="number-field">
                        @foreach($digit as $row)
                            <pre class="number-field"> {{$row}}  </pre>
                        @endforeach
                    </div>

                @endforeach

            @endif


        </div>
    </div>
@endsection
