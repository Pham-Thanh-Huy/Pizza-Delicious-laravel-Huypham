@extends('user.layout')

@section('content')
<br><br>
<div class="container">
        <h1 style="text-align:center">Đăng kí tài khoản</h1>

    <form class="login-form" action="{{route('register.add')}}" method="POST">
        @csrf
        <div class="input-group">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" value="{{old('username')}}">
        </div>
        @if($errors -> has('username'))
            <p style="color: red;">{{$errors -> first('username')}}</p>
        @endif
        <div class="input-group">
            <label for="password">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your password" value="{{old('email')}}">
        </div>
        @if($errors -> has('email'))
            <p style="color: red;">{{$errors -> first('email')}}</p>
        @endif

        <div class="input-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" >
        </div>
        <div class="input-group">
            <label for="password">Xác nhận mật khẩu:</label>
            <input type="password" id="password" name="password_confirmation" placeholder="Enter your password">
        </div>
        @if($errors -> has('password'))
            <p style="color: red;">{{$errors -> first('password')}}</p>
        @endif

        <button type="submit">đăng ký</button>
    </form>
</div>
@endsection