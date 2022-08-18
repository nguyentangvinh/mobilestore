@extends('admin.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Danh Sách Danh Mục</h3>
    </div>
    @include('alert')
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Sản Phẩm</th>
              <th>Danh Mục</th>            
              <th>Giá Gốc</th>
              <th>Giá Sale</th>  
              <th>Ảnh</th>
              <th>Kích Hoạt</th>
              <th>Date</th>         
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->menu->name }}</td>
                <td>{{ number_format($product->price) }}d</td>
                <td>{{ number_format($product->price_sale) }}d</td>
                <td><img src="{{ $product->thumb }}" width="50px"></td>
                <td>{!! $product->active == 1 ? '<span class="btn btn-success btn-sm">YES</span>' : '<span class="btn btn-danger btn-sm">NO</span>' !!}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="removeRow({{ $product->id }}, '/admin/product/destroy')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            
                              
          </tbody>
          
        </table>
        {{-- {{ $menus->links() }} --}}
    </div>
    
</div>

@endsection