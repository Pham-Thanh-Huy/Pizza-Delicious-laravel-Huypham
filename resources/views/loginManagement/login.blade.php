@extends('user.layout')



@section('content')
<br><br><br><br><br>
<div class="container">
    <h1 style="text-align:center">Đăng nhập</h1>
    <form class="login-form" action="{{route('check_login')}}" method="POST">
        @csrf


        <div class="input-group">
            <label for="username">email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email">
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
        <button type="submit">Login</button>
    </form>
</div>
@endsection