
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
                @if (Auth::user() && Auth::user()->type == 'admin')
                            <table class="my-table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>#</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td><a  href="{{ url('/auth/edit/'.$user->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="container">
                    <h1>You don't have permission to view this page</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection