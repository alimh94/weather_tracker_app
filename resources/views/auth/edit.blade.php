
@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user() && Auth::user()->type == 'admin')
        <h1>Update User</h1>

        <form action="#" method="post">
            {{csrf_field()}}
            <div>
                <p>
                    <label>
                        Name:<br>
                        <input type="text" id="name" value="{{$user->name}}" name="name">

                    </label>
                </p>
                <p>
                    <label>
                        Email:<br>
                        <input type="text" id="email" value="{{$user->email}}" name="email">

                    </label>
                </p>
                <p>
                    <label>
                        Type:<br>
                        <select name="type" id="type">
                            <option value="regular" <?= $user->type === 'regular' ? 'selected' : '' ?>>Regular</option>
                            <option value="admin" <?= $user->type === 'admin' ? 'selected' : '' ?>>Admin</option>
                        </select>
                    </label>
                </p>
            </div>
            <p>
                <input value="update User" type="submit">
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