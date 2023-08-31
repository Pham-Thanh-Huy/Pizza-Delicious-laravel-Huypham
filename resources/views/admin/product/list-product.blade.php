@extends('admin.layout')



@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!--  //kiểm tra thêm sản phẩm nếu thất bại thì thông báo -->
            @if(session('fail'))
            <div class="card bg-danger text-white">
                <div class="card-body">
                    {{ session('fail') }}
                </div>
            </div>
            @endif

            <!--  //kiểm tra thêm sản phẩm nếu thành công thì thông báo -->
            @if(session('success'))
            <div class="card bg-success text-white">
                <div class="card-body">
                    {{ session('success') }}
                </div>
            </div>
            @endif

            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Danh sách sản phẩm</h4>

                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Mã sản phẩm</th>
                                            <th>Ảnh sản phẩm</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá tiền</th>
                                            <th>Thông tin người đăng bài</th>
                                            <th>Ngày đăng</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach($products as $item)
                                        <tr>
                                            <th scope="row">{{$item -> id}}</th>
                                            <td>
                                                <img style="margin-left:30px" src="{{asset($item -> product_thumb)}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle  mr-2">
                                            </td>

                                            <td>
                                                {{$item -> product_name}}
                                            </td>

                                            <td>
                                                {{ number_format($item->price, 0, ',', '.') . ' ₫' }}
                                            </td>


                                            <td>
                                                @foreach($user_upload as $users)
                                                @if($item -> user_id == $users['id'])
                                                @if($users['user_image'] === null)
                                                <img src="{{asset('assets-admin\images\users\avatar-white.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                @else
                                                <img src="{{asset($users['user_image'])}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                @endif
                                                <div class="overflow-hidden">
                                                    <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">{{$users['name']}}</a></p>
                                                    <span class="font-13">{{$users['email']}}</span>
                                                </div>
                                                @break
                                                @endif
                                                @endforeach

                                            </td>

                                            <td>
                                                {{$item -> created_at}}
                                            </td>

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Sửa sản phẩm</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Xóa sản phẩm</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products -> links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->

    </div> <!-- content -->

</div>
@endsection