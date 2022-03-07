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
                    @foreach($weather_records as $key => $data)
                    <tr>
                        <td>{{$data->city->name}}</td>
                        <td>{{$data->weatherCondition->main}}<br>{{$data->weatherCondition->description}}</td>
                        <td>{{$data->temp}}<sup>o</sup>C</td>
                        <td>{{$data->feels_like}}<sup>o</sup>C</td>
                        <td>{{$data->humidity}}%</td>
                        <td>{{$data->wind_speed}} km/h</td>
                        <td>{{$data->created_at}}</td>
                        @if (Auth::user() && Auth::user()->type == 'admin')
                        <td><a  href="{{ url('/forecast/update/'.$data->id) }}">Edit</a></td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
               <br>
                <div class="d-flex justify-content-center">
                    {!! $weather_records->links() !!}
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection