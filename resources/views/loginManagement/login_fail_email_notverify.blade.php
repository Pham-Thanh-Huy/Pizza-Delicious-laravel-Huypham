@extends('user.layout')
<style>
    .select {
        display: flex;
        justify-content: center;

        align-items: center;

    }

    a {
        display: block;
    }

    a:hover {
        color: red !important;
    }
</style>
@section('content')
<br><br><br><br><br>
<div class="container">

    <h4 style="text-align:center">Tài Khoản của bạn chưa được xác thực vui lòng vào gmail để xác thực tài khoản</h4>
    <div class="select">
        <button style="background-color: black; border:none; padding:5px; margin-right:10px"><a href="https://gmail.com/">Vào gmail</a></button>
        <button style="background-color: black; border:none; padding:5px "><a href="{{route('logout')}}"> Tiếp tục sử dụng web và không login</a></button>
    </div>

</div>
@endsection