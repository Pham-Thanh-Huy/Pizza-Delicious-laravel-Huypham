@extends('user.layout')

@section('content')
<br><br><br><br><br>
<div class="container">
        <h1 style="text-align:center">Đăng kí tài khoản</h1>

    <form class="login-form">
        @csrf
        <div class="input-group">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>

        <div class="input-group">
            <label for="password">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your password" required>
        </div>
        
        <div class="input-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-group">
            <label for="password">Xác nhận mật khẩu:</label>
            <input type="password" id="password" name="confirm-password" placeholder="Enter your password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</div>
@endsection