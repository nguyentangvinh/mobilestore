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
              <th>Tên Danh Mục</th>
              <th>Kích Hoạt</th>            
              <th>Date</th>         
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>

                {!! \App\Helpers\Helper::menu($menus) !!}  {{-- $menus chinh' la` menus duoc truyen` tu` controller --}}
                
          </tbody>
          
        </table>
        {{-- {{ $menus->links() }} --}}
    </div>
    
</div>

@endsection