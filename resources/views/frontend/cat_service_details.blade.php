@extends('frontend.body.master')

@section('title')
		خدمات التصنيف
	@endsection
@section('main')
<!-- slider-start -->
<div class="slider-area">
    <div class="page-title">
        <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{URL::asset('frontend/img/contact/9.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-content slider-content-breadcrumb text-center">
                            <h1 class="white-color f-700">خدمات التصنيف</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">خدمات التصنيف</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-end -->
<!-- courses start -->
<div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
    <div class="container">
        <div class="courses-list">
            <div class="row">
                @foreach($categoryService as $service)
                <div class="col-xl-4 col-lg-4 col-md-6">
                   
                    <div class="courses-wrapper course-radius-none mb-30">
                       
                        <div class="courses-thumb">
                           <img src="{{ asset($service->image) }}" alt="">
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <h1><a href="#">{{ $service->category->cat_name }}</a></h1>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1>{{ $service->ser_name }}</h1>
                                </div>
                                <div class="courses-para">
                                    <p>{{ $service->details }}.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>@endforeach
            </div>
        </div>
    </div>
</div>
<!-- courses end -->

@endsection