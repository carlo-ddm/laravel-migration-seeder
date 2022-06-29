@extends('layout.main')
@section('content')
@dump($trains)

<div>
    <ul>
        @foreach ($trains as $train)
        <li>{{$train->corporation}}</li>
        <li>{{$train->departures}}</li>
        <li>{{$train->arrivals}}</li>
        <li>{{$train->departures_time}}</li>
        <li>{{$train->arrivals_time}}</li>
        <li>{{$train->train_code}}</li>
        <li>{{$train->train_carriages}}</li>
        <li>{{$train->in_time}}</li>
        <li>{{$train->deleted}}</li>
        @endforeach
    </ul>
</div>
@endsection
