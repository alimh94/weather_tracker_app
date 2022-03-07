@extends('layouts.app')



@section('content')
    <div class="container">
        @if (Auth::user() && Auth::user()->type == 'admin')
        <h1>Update Weather Forecast</h1>

        <form action="#" method="post">
            {{csrf_field()}}
            <div>
                <p>
                    <label>
                        City:<br>
                        <select name="city" id="city">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}" <?= $weather_record->city_id === $city->id ? 'selected' : '' ?>>{{$city->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </p>

                <p>
                    <label>
                        Weather Condition:<br>
                        <select name="condition" id="condition">
                            @foreach($weather_conditions as $weather_condition)
                                <option value="{{$weather_condition->id}}" <?= $weather_record->weather_condition_id === $weather_condition->id ? 'selected' : '' ?>>{{$weather_condition->main}}/{{$weather_condition->description}}</option>
                            @endforeach
                        </select>
                    </label>
                </p>

                <p>
                    <label>
                        Temp:<br>
                        <input type="number" id="temp" value="{{$weather_record->temp}}" name="temp"><br><br>
                    </label>
                </p>

                <p>
                    <label>
                        Feels Like:<br>
                        <input type="number" id="feels_like" value="{{$weather_record->feels_like}}" name="feels_like">
                    </label>
                </p>

                <p>
                    <label>
                        Humidity:<br>
                        <input type="number" id="humidity" value="{{$weather_record->humidity}}" name="humidity">%
                    </label>
                </p>
                <p>
                    <label>
                        Wind Speed:<br>
                        <input type="number" id="wind_speed" value="{{$weather_record->wind_speed}}" name="wind_speed">km/h<br><br>
                    </label>
                </p>

                <p>
                    <label>
                        Date:<br>
                        <input type="datetime" id="created_at" value="{{$weather_record->created_at}}" name="created_at">
                    </label>
                </p></div>
                <p>
                    <input value="update Forecast" type="submit">
                </p>
        </form>
        @else
            <h1>You don't have permission to view this page</h1>
        @endif
    </div>
    </div>
    </div>
    </div>

@endsection
