@extends('user.layout')



@section('content')
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                </div>

            </div>
        </div>
    </div>
</section>



<div class="container">
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Thực đơn Pizza tại Pizza-Delicious</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Là một trong những nhà hàng pizza có chất lượng chuẩn Italy và có đầu bếp 5 sao đến từ Italy</p>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @foreach($products_pizza_first_4 as $item)
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url('{{ asset($item->product_thumb) }}');"></div>

                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>{{$item -> product_name}}</span></h3>
                        <span class="price">{{number_format($item -> price, 0, ',', '.'). '₫'}}</span>
                    </div>
                    <div class="d-block">
                        <p>{{$item -> product_description}}</p>
                        <button style="background-color: orange; border:none"><a style="color: white;" href="#">Thêm vào giỏ hàng</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-6">
            @foreach($products_pizza_next_4 as $item)
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url('{{ asset($item->product_thumb) }}');"></div>

                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                        <h3><span>{{$item -> product_name}}</span></h3>
                        <span class="price">{{number_format($item -> price, 0, ',', '.'). '₫'}}</span>
                    </div>
                    <div class="d-block">
                        <p>{{$item -> product_description}}</p>
                        <button style="background-color: orange; border:none"><a style="color: white;" href="#">Thêm vào giỏ hàng</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>
<br><br>
<section class="ftco-menu">
    <div class="row justify-content-center">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Các món ăn được khách yêu thích tại pizza Delicious</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>

        </div>
    </div>
    <br><br>
    <div class="container-fluid">

        <div class="row d-md-flex">

            <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

                            <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    @foreach($products_pizza_hot as $item)
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url('{{asset($item -> product_thumb)}}');"></a>
                                            <div class="text">
                                                <h3><a href="#">{{$item -> product_name}}</a></h3>

                                                <p class="price"><span>{{$item -> pice}}</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Thêm vào giỏ hàng</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Lemonade Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Pineapple Juice</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Soda Drinks</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                                <p class="price"><span>$2.90</span></p>
                                                <p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
                                            </div>
                                        </div>
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