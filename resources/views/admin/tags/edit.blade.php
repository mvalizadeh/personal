@extends('admin.layouts.master')

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ایجاد دسته بندی</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tags.update',$tag->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">نام تگ</label>
                        <input type="text" class="form-control" id="name" value="{{ $tag->name }}" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-success">ویرایش</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
    </div>
@endsection
