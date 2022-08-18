<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 style="text-transform: uppercase">{{ $titleProduct }}</h2>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container">      
                    <div class="row">
                        
                        @foreach ($products as $product)
                            
                        
                        <div class="col-md-3">
                    <!-- Single Product -->              
                        <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ $product->thumb }}" alt="">
                                <!-- Hover Thumb -->                       
                                <!-- Favourite -->                 
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="/products/{{ $product->id }}-{{ Str::slug($product->name) }}/detail">
                                    <h6 style="font-weight: 500;">{{ $product->name }}</h6>
                                </a>
                                <span class="product-price" 
                                style="color: red;font-size: 16px;
                                font-weight: bold;
                                white-space: nowrap; font-family: 'Roboto Condensed', sans-serif!important;"> 
                                {!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}</span>

                               
                        </div>

                        
                </div>
                @endforeach
            </div>

        {{ $products->links() }}
        
    </div>
</section>