@extends('frontend.body.master')

@section('title')
		التصنيفات
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
                            <h1 class="white-color f-700">التصنيفات</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">التصنيفات</li>
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
                @php
                $categries = App\Models\Category::latest()->get();
            @endphp
            @foreach($categries as $category)
                <div class="col-xl-4 col-lg-4 col-md-6">
                   
                    <div class="courses-wrapper course-radius-none mb-30">
                       
                        <div class="courses-thumb">
                            <a href="{{ route('category.service',$category->id) }}"><img src="{{ asset($category->image) }}" alt=""></a>
                        </div>
                        <div class="course-main-content clearfix">
                            <div class="courses-content">
                                <div class="courses-category-name">
                                    <span>
                                        <a href="{{ route('category.service',$category->id) }}">{{ $category->contact }}</a>
                                    </span>
                                </div>
                                <div class="courses-heading">
                                    <h1><a href="{{ route('category.service',$category->id) }}">{{ $category->cat_name }}</a></h1>
                                </div>
                                <div class="courses-para">
                                    <p>{{ $category->details }}.</p>
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