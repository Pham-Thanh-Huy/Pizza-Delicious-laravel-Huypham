@extends('user.layout')

<style>
    .click:hover{
        color: red;
    }
</style>

@section('content')
<br><br><br>
@if(session('status'))
        <p style="color: green; background:#eee; text-align:center">{{session('status')}}</p>
    @endif

    @if(session('fail'))
        <p style="color: red; background:#eee; text-align:center">{{session('fail')}}</p>
    @endif
<div class="container">
    <h1 style="text-align:center">Đăng nhập</h1>
    <form class="login-form" action="{{route('check.login')}}" method="POST">
        @csrf


        <div class="input-group">
            <label for="username">email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
        </div>
        @if($errors -> has('email'))
        <p style="color: red;">{{$errors -> first('email')}}</p>
        @endif
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        @if($errors -> has('password'))
        <p style="color: red;">{{$errors -> first('password')}}</p>
        @endif

        @if($errors -> has('check'))
        <p style="color: red;">{{$errors -> first('check')}}</p>
        @endif
        <p style="font-size: 12px;">Nếu bạn chưa có tài khoản. Vui lòng đăng kí <a class="click" href="{{route('register')}}">ở đây</a></p>
        <p style="font-size: 12px;">Quên mật Khẩu <a class="click" href="{{route('password.forgot')}}">ấn vào đây</a></p>
        <button type="submit">Login</button>
    </form>
</div>
@endsection
