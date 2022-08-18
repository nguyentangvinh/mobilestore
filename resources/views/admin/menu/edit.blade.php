@extends('admin.main')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Thêm Danh Mục</h3>
    </div>
    @include('alert')
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="menu">Tên Danh Mục</label>
            <input type="text" class="form-control" id="" placeholder="Nhập tên danh mục" name="name" value="{{ $menu->name }}">
          </div>
          <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">

              <option value="0" {{ $menu->parent_id == 0 ? 'selected' : '' }} >Danh Mục Cha</option>

              @foreach ($getParent as $parent)
              
              <option value="{{ $parent->id }}" {{ $menu->parent_id == $parent->id ? 'selected' : '' }} >{{ $parent->name }}</option>

              @endforeach
                         
            </select>
          </div>
          <div class="form-group">
            <label for="menu">Mô Tả</label>
            <input type="text" class="form-control" id="" placeholder="Nhập mô tả danh mục" name="description" value="{{ $menu->description }}">
          </div>
          <div class="form-group"></div>
            <label for="menu">Mô Tả Chi Tiết</label>
            <textarea type="text" class="form-control" id="" placeholder="Nhập Mô Tả Chi Tiểt" rows="5" name="content">{{ $menu->content }}</textarea>
          </div>
          <div class="form-group">
            <label for="menu">Kích Hoạt</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="1" name="active" {{ $menu->active == 1 ? 'checked=""' : '' }} >
              <label class="form-check-label">Có</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="0" name="active" {{ $menu->active == 0 ? 'checked=""' : '' }} >
              <label class="form-check-label">Không</label>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>
        @csrf
      </form>
   


  </div>  
                      

@endsection

