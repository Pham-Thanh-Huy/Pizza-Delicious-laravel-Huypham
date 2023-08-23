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
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Tên sản phẩm</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="simpleinput" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="example-email">Giá tiền</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                             

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="example-textarea">Mô tả sản phẩm</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Danh mục sản phẩm</label>
                                    <div class="col-lg-10">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>

                                    </div>
                                </div>



                                <div class="form-group row mb-0">
                                    <label class="col-lg-2 col-form-label">Ảnh sản phẩm</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            </div>
                                        </div>
                                        <div id="selectedImage" ></div>
                                    </div>
                                </div>

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