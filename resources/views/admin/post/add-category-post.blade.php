@extends('admin.layout')


@section('content')
<style>
    #selectedImage img {
        margin-top: 30px;
        max-width: 200px;
        max-height: 100px;
    }
</style>
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

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Thêm danh mục bài viết</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('admin.add-category-post')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Tên danh mục</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="simpleinput" name="name_category_post" value="{{old('name_category_post')}}">
                                    </div>
                                </div>

                                @if($errors -> has('name_category_post'))
                                <p style="color: red;">{{$errors -> first('name_category_post')}}</p>
                                @endif

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Danh mục cha</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="parent_category_post">
                                            <option value="">Chọn</option>
                                            <option value="0">Không thuộc danh mục cha nào</option>
                                            @foreach($category_post as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($errors -> has('parent_category_post'))
                                <p style="color: red;">{{$errors -> first('parent_category_post')}}</p>
                                @endif

                                <div class="form-group row mb-0 text-right">
                                    <div class="col-lg-10 offset-lg-2">
                                        <input style="margin-top:20px; border:none" type="submit" value="Thêm sản phẩm" class="btn btn-primary">
                                    </div>
                                </div>

                            </form>

                        </div> <!-- end card-box -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Danh mục sản phẩm</h4><br>

                            <div class="table-responsive">
                                <table class="table mb-0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>ID</th>
                                            <th>Danh mục sản phẩm</th>
                                            <th>Danh mục cha</th>
                                            <th>Ngày tạo danh mục</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- kiểm tra danh mục cha -->
                                        @php
                                        $parentCategories = [];
                                        foreach ($category_post as $category) {
                                        $parentCategories[$category->id] = $category->name;
                                        }
                                        @endphp
                                        <?php $count = 0; ?> <!-- Khởi tạo biến đếm -->
                                        @foreach($category_post as $item)
                                        <?php $count++; ?> <!-- Tăng biến đếm sau mỗi vòng lặp -->
                                        <tr>
                                            <th>{{$count}}</th>
                                            <th scope="row">{{$item->id}}</th>
                                            <th>{{$item->name}}</th>

                                            <!-- kiểm tra danh mục cha nếu không thuộc danh mục cha thì ghi không nếu có danh mục cha thì in ra danh mục cha -->
                                            <th>
                                                @if (isset($parentCategories[$item->parent_id]))
                                                {{ $parentCategories[$item->parent_id] }}
                                                @else
                                                Không
                                                @endif
                                            </th>

                                            <th>{{$item->created_at}}</th>
                                            <th><a style="color: green;" href="{{route('admin.change-category-post-view', ['id' => $item -> id])}}">Sửa</a> - <a style="color: red;" href="{{route('admin.delete-category-post', ['id' => $item -> id])}}">Xóa</a></th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                </div> <!-- end col -->
            </div> <!-- container-fluid -->


        </div> <!-- content -->
    </div>

    @endsection