@extends('app.layouts.master')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            @include('app.layouts.search')
        </div><!--end row-->

        <div class="row projects-wrapper">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business">
                <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid">
                    <div class="card-body">
                        <div class="content">
                            <a href="page.html" class="badge badge-primary">{{ $post->category->name }}</a>
                            <h5 class="mt-3"><a href="{{ route('page',$post->slug) }}" class="text-dark title">{{ $post->title }}</a></h5>
                            <p class="text-muted">{{ Str::limit($post->description, 50, '...') }}</p>
                            <a href="{{ route('page',$post->slug) }}" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
            
            

            
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
@endsection

