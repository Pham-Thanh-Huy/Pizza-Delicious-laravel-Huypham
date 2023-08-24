@extends('user.layout')

@section('content')
<br><br><br><br><br>
<div class="container">
    @if(session('status'))
    <p style="color: green; background:#eee; text-align:center">{{session('status')}}</p>
    @endif
    <h1 style="text-align:center">Quên mật khẩu</h1>
    <form class="login-form" action="{{ route('password.update') }}" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $request -> token }}">
        <input type="hidden" name="email" value="{{ $request -> email }}">

        <div class="input-group">
            <label for="email">Địa chỉ email:</label>
            <input type="email" id="email" name="email" value="{{ $request ->email }}" readonly>
        </div>

        <div class="input-group">
            <label for="password">Mật khẩu mới:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="input-group">
            <label for="password_confirmation">Xác nhận mật khẩu:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        @if($errors->has('password'))
        <p style="color: red;">{{$errors->first('password')}}</p>
        @endif

        <button type="submit">Thay đổi mật khẩu</button>
    </form>
</div>
@endsection
