@extends('main')

@section('content')
<style>
    body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #eecda3, #ef629f);
  min-height: 100vh;
}
</style>
<div class="px-4 px-lg-0" style="padding-bottom: 80px">
    <!-- For demo purpose -->
    
    <div class="container text-white py-5 text-center">
      <h1 class="display-4">Giỏ Hàng</h1>
      
    </div>
    <!-- End -->
    <form action="" method="post">
    @if(count($products) != 0)

    @php
        $total = 0;
    @endphp

    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
            
            

            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Tên Sản Phẩm</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Giá</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Số lượng</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Tổng Giá</div>
                      </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Xóa</div>
                    </th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                    @php
                        $price = $product->price;
                        $priceEnd = $price * $carts[$product->id];
                        $total += $priceEnd;
                    @endphp                     
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="{{ $product->thumb }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                            <strong>{{ $product->name }}</strong>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong>{{ number_format($price, 0,'','.') }}₫</strong></td>
                    
                    <td class="border-0 align-middle"><strong>{{ $carts[$product->id] }}</strong></td>
                    <td class="border-0 align-middle"><strong>{{ number_format($priceEnd, 0,'','.') }}₫</strong></td>
                    <td class="border-0 align-middle"><a href="/delete-carts/{{ $product->id }}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  
                  @endforeach
                  
                </tbody>
                
              </table>
              
            </div>
            <!-- End -->
        
           
          </div>
        </div>
  
        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Ghi chú cho cửa hàng</div>
            <div class="p-4">
             
              <textarea name="" cols="30" rows="2" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông tin đặt hàng </div>
            <div class="p-4">
              
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng phụ </strong><strong>{{ number_format($total, 0,'','.') }}₫</strong></li>
                
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tổng cộng </strong>
                  <h5 class="font-weight-bold">{{ number_format($total, 0,'','.') }}₫</h5>
                </li>
              </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Thanh toán</a>
            </div>
          </div>
        </div>
  
      </div>
    </div>

    @else
    <div class="text-center">Không có sản phẩm nào trong giỏ hàng...</div>
    <div class="text-center"><a href="/products/all"><i style="color: black" class="fa fa-reply"> Tiếp tục mua hàng</i></a></div>
    @endif
    </form>
  </div>

@endsection