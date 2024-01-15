@extends('admin.layouts.master')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title d-inline">جدول ۱</h3>
        <a class="btn btn-sm btn-outline-success float-left" href="{{ route('tags.create') }}">افزودن تگ جدید</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <table class="table table-bordered">
          <tbody><tr>
            <th style="width: 10px">#</th>
            <th>نام تگ</th>
            <th>عملیات</th>
            
          </tr>
          @forelse ($tags as $tag)
          <tr>
            <td>#</td>
            <td>{{ $tag->name }}</td>
            <td>
              <a class="btn btn-sm btn-outline-success" href="{{ route('tags.edit',$tag->id) }}">ویرایش</a>
              <a class="btn btn-sm btn-outline-danger" href="#">حذف</a>
              </div>
            </td>
            
          </tr>
          @empty
              
          @endforelse
          
          
        </tbody></table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">۱</a></li>
          <li class="page-item"><a class="page-link" href="#">۲</a></li>
          <li class="page-item"><a class="page-link" href="#">۳</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card -->

    <!-- /.card -->
  </div>
@endsection
