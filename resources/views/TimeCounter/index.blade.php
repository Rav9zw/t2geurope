@extends('./base')

@section('content')
    <div class="d-none" id="draw-date">{{$drawDate}}</div>
    <div class="container">
        <div class="counter">

            <div class="counter-item-container">
                <div class="counter-item">
                    <img src="/images/counter.png">
                    <div id='counter-days' class="counter-value"></div>
                    <img src="/images/line.png" class="counter-line">
                </div>
                <div class="counter-label">days</div>
            </div>

            <div class="counter-item-container">
                <div class="counter-item">
                    <img src="/images/counter.png">
                    <div id='counter-hours' class="counter-value"></div>
                    <img src="/images/line.png" class="counter-line">
                </div>
                <div class="counter-label">hours</div>
            </div>

            <div class="counter-item-container">
                <div class="counter-item">
                    <img src="/images/counter.png">
                    <div id='counter-minutes' class="counter-value"></div>
                    <img src="/images/line.png" class="counter-line">
                </div>
                <div class="counter-label">minutes</div>
            </div>

            <div class="d-none counter-item-container">
                <div class="counter-item">
                    <img src="/images/counter.png">
                    <div id='counter-seconds' class="counter-value"></div>
                    <img src="/images/line.png" class="counter-line">
                </div>
                <div class="counter-label">seconds</div>
            </div>

        </div>
    </div>

@endsection
