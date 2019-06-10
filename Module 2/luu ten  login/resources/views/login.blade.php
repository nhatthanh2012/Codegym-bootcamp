@extends('layout')
@section('content')
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-block">
            @if(Session::has('message'))
                <div class='alert alert-danger' > {{  Session::get('message')}}</div>
            @endif
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="username"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-block">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="password"
                       placeholder="Password"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
@endsection