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

                        <h4 class="page-title">Thêm sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.add-product')}}"  method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Tên sản phẩm</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="product_name" class="form-control" id="simpleinput" value="{{old('product_name')}}">
                                    </div>
                                </div>

                                @if($errors -> has('product_name'))
                                <p style="color: red;">{{$errors -> first('product_name')}}</p>
                                @endif
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="example-email">Giá tiền</label>
                                    <div class="col-lg-10">
                                        <input type="text"  value="{{old('product_price')}}"  name="product_price" class="form-control">
                                    </div>
                                </div>
                                    
                                @if($errors -> has('product_price'))
                                <p style="color: red;">{{$errors -> first('product_price')}}</p>
                                @endif

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="post-textarea">Mô tả sản phẩm</label>
                                    <div class="col-lg-10">
                                        <textarea name="product_description" class="form-control" cols="7" id="post-textarea">{{old('product_description')}}</textarea>
                                    </div>
                                </div>

                                
                                @if($errors -> has('product_description'))
                                <p style="color: red;">{{$errors -> first('product_description')}}</p>
                                @endif

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Danh mục sản phẩm</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="category_product">
                                            <option value="">Chọn</option>
                                            @foreach($category_product as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                
                                @if($errors -> has('category_product'))
                                <p style="color: red;">{{$errors -> first('category_product')}}</p>
                                @endif

                                <div class="form-group row mb-0">
                                    <label class="col-lg-2 col-form-label">Ảnh sản phẩm</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="product_img" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            </div>
                                        </div>
                                        <div id="selectedImage"></div>
                                    </div>
                                </div>

                                @if($errors -> has('product_img'))
                                <p style="color: red;">{{$errors -> first('product_img')}}</p>
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
        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>

@endsection
