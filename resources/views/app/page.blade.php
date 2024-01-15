@extends('app.layouts.master')

@section('content')
    <section class="bg-half">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="section-title">
                        <div class="text-center">
                            <h4 class="title mb-4">{{ $post->title }}</h4>
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded-md shadow-md"
                                alt="">
                            <div class="d-flex mt-3 align-items-center justify-content-between">
                                <p> نویسنده این مطلب : {{ $post->user->name }} </p>
                                <p> آخرین بروزرسانی : 1400/5/5 </p>
                            </div>
                        </div>
                        <h4 class="my-4">لرن پارس</h4>
                        <p class="text-muted">
                            {{ $post->description }}
                        </p>
                        <div>
                            @forelse ($post->tags as $tag)
                                <a href="#" class="btn btn-sm btn-primary">{{ $tag->name }}</a>
                            @empty
                                تگی جهت نمایش وجود ندارد
                            @endforelse
                        </div>

                        <h4 class="my-4">نظرات کاربران</h4>
                        <div class="p-4 bg-light">
                            <h6 class="text-dark">علی</h6>
                            <p class="text-muted h6 font-italic"> بیا این کفشا رو بپوش…پسرک کفشا رو پوشید و خوشحال رو به پیر
                                مرد کرد و گفت: شما خدایید؟! پیر مرد لبش را گزید و گفت نه! پسرک گفت پس دوست خدایی، چون من
                                دیشب فقط به خدا گفتم كه کفش ندارم…</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
