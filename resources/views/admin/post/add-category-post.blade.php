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

                        <h4 class="page-title">Thêm danh mục bài viết</h4>
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
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Tên danh mục</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="simpleinput" value="">
                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Danh mục cha</label>
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Danh mục bài viết</h4><br>


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Danh mục bài viết</th>
                                            <th>Danh mục cha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                        </tr>

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