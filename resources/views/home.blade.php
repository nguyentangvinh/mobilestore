@extends('main')

@section('content')

<div class="cart-bg-overlay"></div>
 
    @include('silder')
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2 style="text-transform: uppercase">Bạn Đang Tìm</h2>
                        </div>
                    </div>
                </div>
            
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(/home-template/img/bg-img/dtcu.jpg);">
                        <div class="catagory-content">
                            <a href="#" style="text-align: center">Điện Thoại Mới Nhất</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(/home-template/img/bg-img/dtgiamgia.jpg);">
                        <div class="catagory-content">
                            <a href="#" style="text-align: center">Điện Thoại Cũ</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(/home-template/img/bg-img/dtgiare.jpg);">
                        <div class="catagory-content">
                            <a href="#" style="text-align: center">Điện Thoại Giảm Giá</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    @include('product.new-product')
@endsection