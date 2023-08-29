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


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('admin.change-category-product')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$category_product_change -> id}}">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Tên danh mục</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="simpleinput" name="name_category_product" value="{{$category_product_change -> name}}">
                                    </div>
                                </div>

                                @if($errors -> has('name_category_product'))
                                <p style="color: red;">{{$errors -> first('name_category_product')}}</p>
                                @endif

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Danh mục cha</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="parent_category_product">
                                            @php
                                            $foundMatch = false;
                                            @endphp

                                            @foreach($category_product as $item)
                                            @if($category_product_change->parent_id == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }} - Lựa chọn hiện tại</option>
                                            @php
                                            $foundMatch = true;
                                            @endphp
                                            @break
                                            @endif
                                            @endforeach

                                            @if(!$foundMatch)
                                            <option value="0">Không thuộc danh mục cha nào - Lựa chọn hiện tại</option>
                                            @endif



                                            <option value="0">Không thuộc danh mục cha nào</option>
                                            @foreach($category_product as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($errors -> has('parent_category_product'))
                                <p style="color: red;">{{$errors -> first('parent_category_product')}}</p>
                                @endif

                                <div class="form-group row mb-0 text-right">
                                    <div class="col-lg-10 offset-lg-2">
                                        <input style="margin-top:20px; border:none" type="submit" value="Sửa danh mục" class="btn btn-primary">
                                    </div>
                                </div>

                            </form>

                        </div> <!-- end card-box -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->





        </div> <!-- content -->
    </div>

    @endsection