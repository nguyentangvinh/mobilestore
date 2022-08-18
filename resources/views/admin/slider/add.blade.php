@extends('admin.main')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Slider</h3>
    </div>
    @include('alert')
    <form action="" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tiêu Đề</label>
                        <input type="text" class="form-control" id="" placeholder="Nhập tên slide" name="name" value="{{ old('name') }}">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Đường Dẫn</label>
                        <input type="text" class="form-control" id="" placeholder="Nhập tên đường dẫn" name="url" value="{{ old('link') }}">
                      </div>
                </div>
            </div>
          
          
          <div class="form-group">
            <label for="menu">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" name="file" id="upload">
            <div id="show-image">

            </div>
            <input type="hidden" name="thumb" id="thumb">

          </div>
          <div class="form-group">
            <label for="menu">Sắp Xếp</label>
            <input type="number" class="form-control" id="" placeholder="Sắp xếp" name="sort_by" value="{{ old('sort_by') }}">
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
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        @csrf
      </form>
   


  </div>  
                      

@endsection
