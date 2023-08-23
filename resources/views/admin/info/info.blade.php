@extends('admin.layout')


@section('content')
    <div class="content-page">
        <div class="content">
            <section style="background-color: #fff;">
                <div class="container py-5">


                    <div class="row">
                        <div  class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets-admin/images/users/avatar-4.jpg') }}" alt="avatar"
                                        class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{ $user_name }}</h5>
                                    <p class="text-muted mb-1">Admin-pizza-delicious</p>
                                    <p class="text-muted mb-4">Phòng 25 K5 Bách Khoa Hai Bà Trưng Hà Nội</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Họ và tên</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user_name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user_email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Số điện thoại</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">chưa update</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Địa chỉ</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Bách khoa Hai Bà Trưng Hà Nội</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    </section>
@endsection
