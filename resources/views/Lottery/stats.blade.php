@extends('./base')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <th>Nazwa Loterii</th>
            <th>Przychód</th>
            <th>Zysk</th>
            </thead>
            <tbody>

            @foreach($results as $name => $value)
                <tr>
                    <td>{{$name}}</td>
                    <td>{{$value['earning']}}</td>
                    <td>{{$value['earning']-$value['cancelled']}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
@endsection
