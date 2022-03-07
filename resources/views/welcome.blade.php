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
                @foreach($weather_records as $key => $data)
                        <div class="today forecast">
                            <div class="forecast-header">
                                <div class="day">{{$data->city->name}}</div>
                                <div class="date">{{$data->created_at}}</div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="location">{{$data->weatherCondition->main}}</div>
                                {{--<span>{{$data->weatherCondition->description}}</span>--}}
                                <div class="degree">
                                    <div class="num">
                                        {{$data->temp}}<sup>o</sup>C
                                        <br><span style="font-size: small;">Feels Like {{$data->feels_like}}<sup>o</sup>C</span>
                                    </div>
                                    <div class="forecast-icon">
                                        <img src="{{url('http://openweathermap.org/img/wn/'.$data->weatherCondition->icon.'@2x.png')}}"  alt="" width=90>
                                    </div>
                                </div>
                                <span><img src="images/icon-umberella.png" alt="">{{$data->humidity}}%</span>
                                <span><img src="images/icon-wind.png" alt="">{{$data->wind_speed}} km/h</span>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection