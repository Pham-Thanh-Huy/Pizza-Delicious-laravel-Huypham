@extends('user.layout')



@section('content')
<br><br><br><br><br>
<div class="container">
    @if(session('status'))
        <p style="color: green; background:#eee; text-align:center">{{session('status')}}</p>
    @endif
    <h1 style="text-align:center">Quên mật khẩu</h1>
    <form class="login-form" action="{{route('password.sendmail')}}" method="POST">
        @csrf


        <div class="input-group">
            <label for="username"> Nhập email đã đăng ký tài khoản:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        @if($errors -> has('email'))
        <p style="color: red;">{{$errors -> first('email')}}</p>
        @endif
        
        <button type="submit">Submit</button>
    </form>
</div>
@endsection