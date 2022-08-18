@extends('admin.main')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Sản Phẩm</h3>
    </div>
    @include('alert')
    <form action="" method="post">
        <div class="card-body">
            
                <div class="form-group">
                    <label for="menu">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label>Danh Mục</label>
                    <select class="form-control" name="menu_id">

                        @foreach ($menus as $menu)

                        <option value="{{ $menu->id }}">{{ $menu->name }}</option> 

                        @endforeach
                                          
                      
                    </select>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Gốc</label>
                        <input type="number" class="form-control" id="" placeholder="Nhập tên giá gốc" name="price" value="{{ old('price') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Sale</label>
                        <input type="number" class="form-control" id="" placeholder="Nhập tên giá sale" name="price_sale" >
                    </div>
                </div>
            </div>
          
          
          <div class="form-group">
            <label for="menu">Mô Tả</label>
            <input type="text" class="form-control" id="" placeholder="Nhập mô tả sản phẩm" name="description" value="{{ old('description') }}">
          </div>
          <div class="form-group">
            <label for="menu">Mô Tả Chi Tiết</label>
            <textarea type="text" class="form-control" id="" placeholder="Nhập Mô Tả Chi Tiểt" rows="5" name="content">{{ old('content') }}</textarea>
          </div>
          <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" name="file" id="upload">
            <div id="show-image">

            </div>
            <input type="hidden" name="thumb" id="thumb">

          </div>
          <div class="form-group">
            <label for="menu">Kích Hoạt</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="1" name="active" checked="">
              <label class="form-check-label">Có</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="0" name="active" >
              <label class="form-check-label">Không</label>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
      </form>
  </div>  
                      

@endsection
