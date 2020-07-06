@extends('layouts.Master')

@section('content')

    <div class="login container" style="margin-top: 150px; margin-bottom: 204px;">
        <h2 class="text-center">Admin Login</h2>
        @include('partials.errors')
        <form class="form-group" action="{{ route('admin.login') }}" method="POST">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="name" placeholder="username"><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>
            <input type="submit" name="submit" value="login" class="btn btn-success">
        </form>

    </div>

@endsection