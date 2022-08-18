@extends('admin.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Danh Sách Slider</h3>
    </div>
    @include('alert')
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Slider</th>
              <th>Đường Dẫn</th>            
              <th>Ảnh</th>
              <th>Sắp Xếp</th>
              <th>Kích Hoạt</th>  
              <th>Date</th>         
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td>{{ $slider->name }}</td>
                <td>{{ $slider->url }}</td>
                <td><a href="{{ $slider->thumb }}" target="_blank"><img src="{{ $slider->thumb }}" width="50px"></a></td>
                <td>{{ $slider->sort_by }}</td>
                <td>{!! $slider->active == 1 ? '<span class="btn btn-success btn-sm">YES</span>' : '<span class="btn btn-danger btn-sm">NO</span>' !!}</td>
                <td>{{ $slider->updated_at }}</td>
                <td>
                    <a href="/admin/slider/edit/{{ $slider->id }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" onclick="removeRow({{ $slider->id }}, '/admin/slider/destroy')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            
                              
          </tbody>
          
        </table>
        {{-- {{ $menus->links() }} --}}
    </div>
    
</div>

@endsection