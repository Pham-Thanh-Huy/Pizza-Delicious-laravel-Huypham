@extends('admin.layout')



@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <br><br>
            <div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Thêm nhân viên</h4>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên nhân viên</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group ">
                                        <label>Quyền của nhân viên</label>
                                        <div>
                                            <select class="form-control">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>

                                        </div><br>
                                        <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Danh sách nhân viên công ty</h4>

                                <div class="table-responsive mt-3">
                                    <table class="table table-hover table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Basic Info</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <th scope="row">#0121</th>
                                                <td>
                                                    <img src="{{asset('assets-admin\images\users\avatar-4.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                    <div class="overflow-hidden">
                                                        <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">George Lanes</a></p>
                                                        <span class="font-13">george@examples.com</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    606-467-7601
                                                </td>

                                                <td>
                                                    New York
                                                </td>

                                                <td>
                                                    2018/04/28
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Contact</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#0120</th>
                                                <td>
                                                    <img src="{{asset('assets-admin\images\users\avatar-4.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                    <div class="overflow-hidden">
                                                        <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">Morgan Fuller</a></p>
                                                        <span class="font-13">morgan@examples.com</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    407-748-6878
                                                </td>

                                                <td>
                                                    England
                                                </td>

                                                <td>
                                                    2018/04/27
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Contact</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#0119</th>
                                                <td>
                                                    <img src="{{asset('assets-admin\images\users\avatar-4.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                    <div class="overflow-hidden">
                                                        <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">Charlie Daly</a></p>
                                                        <span class="font-13">charlie@examples.com</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    918-766-5946
                                                </td>

                                                <td>
                                                    Canada
                                                </td>

                                                <td>
                                                    2018/04/27
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Contact</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">#0118
                                                </th>
                                                <td>
                                                    <img src="{{asset('assets-admin\images\users\avatar-4.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                    <div class="overflow-hidden">
                                                        <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">Skye Saunders</a></p>
                                                        <span class="font-13">skye@examples.com</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    302-232-1376
                                                </td>

                                                <td>
                                                    France
                                                </td>

                                                <td>
                                                    2018/04/26
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Contact</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">#0117
                                                </th>
                                                <td>
                                                    <img src="{{asset('assets-admin\images\users\avatar-4.jpg')}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2">
                                                    <div class="overflow-hidden">
                                                        <p class="mb-0 font-weight-medium"><a href="javascript: void(0);">Jodie Townsend</a></p>
                                                        <span class="font-13">jodie@examples.com</span>
                                                    </div>
                                                </td>

                                                <td>
                                                    251-661-5962
                                                </td>

                                                <td>
                                                    Tokyo
                                                </td>

                                                <td>
                                                    2017/11/28
                                                </td>

                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-1 text-muted"></i>Edit Contact</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-1 text-muted"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

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