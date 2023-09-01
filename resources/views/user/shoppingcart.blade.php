@extends('user.layout')

<style>
    .input-bottom-border {
        border: none;
        border-bottom: 1px solid #ccc;
        padding: 5px 0;
        outline: none;
        width: 600px;
        /* Loại bỏ đường viền mặc định khi focus */
    }
    .label-spacing {
    margin-right: 50px;
    display: inline-block;
}
</style>
@section('content')
<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">
                                <h4 class="card-text text-muted mt-4 text-dark space">Thông tin thanh toán</h4>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="username" class="label-spacing">Tên khách hàng</label>
                                        <input type="text" class="input-bottom-border">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="label-spacing">Email</label>
                                        <input type="email" class="input-bottom-border">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="label-spacing">Số điện thoại</label>
                                        <input type="tel" class="input-bottom-border">
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_home">Thanh toán tại nhà</label>
                                        <input type="radio" name="payment" id="payment_home" value="payment_home">
                                        <br>
                                        <label for="direct_payment">Thanh toán trực tiếp</label>
                                        <input type="radio" name="payment" id="direct_payment" value="direct_payment">
                                    </div>
                                   
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col-auto">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">1 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto">
                                        <p class="boxed-1">2</p>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                        <p><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto  my-auto">
                                        <p class="boxed">3</p>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto  my-auto">
                                        <p class="boxed-1">2</p>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="mb-1"><b>Subtotal</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>179 SEK</b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p class="mb-1"><b>Shipping</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>0 SEK</b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p><b>Total</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>537 SEK</b></p>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                                <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Đặt hàng</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection