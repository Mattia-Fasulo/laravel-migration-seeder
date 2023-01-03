@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered caption-top border table-striped">
            <caption class="fs-3">All Trips</caption>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Train Code</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Date</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Number Carriages</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                    <th scope="row">{{$train->train_code}}</th>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->date}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td class="text-center">{{$train->number_carriages}}</td>
                    @if ($train->in_time == 1)
                         <td>In Time</td>
                    @else
                        <td>Late</td>
                    @endif

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
