@extends('layouts.app')
@section('content')
    <div class="hero" >
        <div class="container">
            <form action="{{ route('search') }}"  class="find-location" method="GET">
                <input placeholder="Search by city, condition or tempreature "type="text" name="search" required/>
                <input  placeholder="Find your location..." type="submit" value="search">
            </form>
            <form action="{{ route('search') }}"  class="find-location" method="GET">
                <input style="width: 40%;" placeholder="from..." type="datetime-local" name="from" required/>
                <input style="width: 40%;" placeholder="to..." type="datetime-local" name="to" required/>
                <input style="height: 30px; top:0;" placeholder="Find your location..." type="submit" value="search">
            </form>
            {{--<form action="#" class="find-location">--}}
            {{--<input type="text" placeholder="Find your location...">--}}
            {{--<input type="submit" value="Find">--}}
            {{--</form>--}}

        </div>
    </div>
    <div class="forecast-table">
        <div class="container">
            <div class="forecast-container">
            @if($records->isNotEmpty())
                <table class="my-table">
        <thead>
        <th>City</th>
        <th>Weather Condition</th>
        <th>Temp</th>
        <th>Feels Like</th>
        <th>Humidity</th>
        <th>Wind Speed</th>
        <th>Date</th>
        @if (Auth::user() && Auth::user()->type == 'admin')
        <th>#</th>
        @endif
        </thead>
        <tbody>
    @foreach ($records as $record)
        <tr>
            <td>{{$record->city->name}}</td>
            <td>{{$record->weatherCondition->main}}<br>{{$record->weatherCondition->description}}</td>
            <td>{{$record->temp}}<sup>o</sup>C</td>
            <td>{{$record->feels_like}}<sup>o</sup>C</td>
            <td>{{$record->humidity}}%</td>
            <td>{{$record->wind_speed}} km/h</td>
            <td>{{$record->created_at}}</td>
            @if (Auth::user() && Auth::user()->type == 'admin')
            <td><a  href="{{ url('/forecast/update/'.$record->id) }}">Edit</a></td>
            @endif
        </tr>
    @endforeach
        </tbody>
    </table>
            @else
                <div>
                    <h2>No posts found</h2>
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection