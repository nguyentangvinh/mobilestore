@extends('main')

@section('content')

<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <img src="{{ $products->thumb }}" alt="" width="500px" style="margin-left: 380px; padding-bottom: 70px; padding-top: 70px">
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span>{{ $products->menu->name }}</span>
        <a href="#">
            <h2>{{ $products->name }}</h2>
        </a>
        <p class="product-price"><span class="old-price"></span>{!! \App\Helpers\Helper::price($products->price, $products->price_sale) !!}</p>
        <p class="product-desc">{{ $products->description }}</p>

        <!-- Form -->
        <form action="/add-cart" class="cart-form clearfix" method="post">
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                               
                @if ($products->price != 0)
                <input type="number" value="1" name="num_product" style="width: 70px">
                @endif
                    
                
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                @if ($products->price != null)
                    <button type="submit" name="addtocart" id="btn-addtocart" value="5" class="btn essence-btn">Thêm vào giỏ hàng</button>
                @endif
                
                <input type="hidden" name="product_id" value="{{ $products->id }}">
                <!-- Favourite -->
                
            </div>
            @csrf
        </form>
    </div>
</section>

@endsection