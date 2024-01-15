@extends('admin.layouts.master')

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">وبرایش پست </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">دسته بندی</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                            
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tags">تگها</label>
                        <select class="form-control" id="tags" name="tags[]" multiple>
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" @if(in_array($tag->id,$post->tags->pluck('id')->toArray())) selected @endif>{{ $tag->name }}</option>
                            @endforeach
                            
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">متن</label>
                        <textarea class="form-control" id="description" name="description" placeholder="متن پست" cols="5" rows="5">{{ $post->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" class="form-control" id="image" name="image" >
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">وضعیت</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">فعال</option>
                            <option value="0">غیرفعال</option>
                        </select>
                        @error('status')
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
