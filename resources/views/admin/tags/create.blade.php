@extends('admin.layouts.master')

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ایجاد تگ جدید</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tags.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">نام تگ</label>
                        <input type="text" class="form-control" id="name" placeholder="نام تگ را وارد کنید" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
    </div>
@endsection
