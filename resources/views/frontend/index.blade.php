@extends('frontend.body.master')

@section('title')
		الصفحة الرئيسية
	@endsection
@section('main')

<!-- slider-start -->
<div class="slider-area">
    <div class="page-title">
        <div class="single-slider slider-height slider-height-breadcrumb1 d-flex align-items-center" style="background-image: url({{URL::asset('frontend/img/contact/9.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-content slider-content-breadcrumb text-center">
                            <h1 class="white-color f-700">الصفحة الرئيسية</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-end -->
<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about-title-section mb-30">
                    <h1>حداد الكويت</h1>
                    <p>رقم حداد هندي وباكستاني وايراني بالكويت لأحدث خدمات الحدادة من حداد مظلات كيربي وسيارات وحدائق وحداد عام وحداد تركيب شبابيك وأبواب ودرج حديد, وحداد درابزين معلم محترف يعمل بكل محافظات الكويت 24 ساعة.</p>
                    <p>يمكنك التواصل مع حداد الكويت على رقم الهاتف المباشر 56585569 و عن طريق الواتساب أيضاً, من أي مكان وفي أي وقت.</p>
                    @php
									$quires = App\Models\Query::latest()->limit(1)->get();
								@endphp
								@foreach($quires as $item)
                    <button class="theme-btn blue-bg-border mt-20"><span class="btn-text">{{ $item->contact }}</span></button>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about-right-img mb-30">
                    <img src="{{URL::asset('frontend/img/about/Capture.PNG')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->
<!-- courses start -->
<div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title mb-50 text-center">
                    <div class="section-title-heading mb-20">
                        <h1 class="primary-color">بعض تصنيفات الخدمات</h1>
                    </div>
                    <div class="section-title-para">
                        <p class="gray-color">مشاهدة جميع التصنيفات من <a href="{{ route('category') }}">هنا </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="courses-list">
            <div class="row">
                @php
                $categries = App\Models\Category::latest()->limit(2)->get();
            @endphp
            @foreach($categries as $category)
                <div class="col-xl-6 col-lg-6 col-md-6">
                   
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
<!-- events start -->
<div id="events" class="events-area events-bg-height pt-100 pb-70" style="background-image: url({{URL::asset('frontend/img/courses/courses_bg.png')}})">
    <div class="container">
        <div class="events-list">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="events-registration-form mb-30">
                        <div class="events-registration-form-wrapper">
                            <div class="events-registration-form-heading d-flex justify-content-between">
                                <div class="events-registration-form-heading-title">
                                    <h1>هل لديك أى أسئلة ؟</h1>
                                    <span>نحن سعداء لتلقى اسئلتكم</span>
                                </div>
                                <div class="events-registration-form-heading-icon">
                                    <img src="{{URL::asset('frontend/img/events/events-registration-form-icon.png')}}" alt="">
                                </div>
                            </div>
                            <div class="events-registration-main-form">
                                <form method="post" action= "{{ route('store.message') }}">
                                    {{ csrf_field() }}
                                    <input placeholder="الاسم بالكامل " type="text" name="name" required>
                                    <input placeholder="البريد الالكترونى " type="email" name="email" required>
                                    <input placeholder="رقم التليفون " type="number" name="phone" required>
                                    <input placeholder="الموضوع " type="text" name="subject" required>
                                    <input placeholder="الرسالة :" type="text" name="message" required>
                                    <button class="btn yellow-bg-btn blue-bg-btn-hover" type="submit">أرسل الان</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title section-title-para-2 mb-40">
                                <div class="section-title-heading mb-10">
                                    <h1 >أخر الخدمات المضافة</h1>
                                </div>
                                <div class="section-title-para">
                                    <p>مشاهدة جميع الخدمات من <a href="{{ route('service') }}">هنا </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                    $services = App\Models\Service::latest()->limit(2)->get();
                @endphp
                @foreach($services as $service)
                    <div class="single-events mb-30">
                        <div class="events-wrapper">
                            <div class="events-inner d-flex">
                                <div class="events-thumb">
                                    <img src="{{ asset($service->image) }}" alt="">
                                </div>
                                <div class="events-text events-text-2 white-bg">
                                    <div class="event-text-heading d-flex mb-20">
                                        <div class="events-text-title">
                                            <a href="#">
                                                <h4>{{ $service->ser_name }}</h4>
                                            </a>
                                            <div class="time-area time-area-2">
                                                <p>{{ $service->details }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- events end -->
<!-- team start -->
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title mb-50 text-center">
                    <div class="section-title-heading mb-20">
                        <h1 class="primary-color">خدمات حداد الكويت</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-title-section about-title-section-2 mb-30">
            <div class="row">
                @php
                    $types = App\Models\Type::latest()->limit(20)->get();
                @endphp
                @foreach($types as $type)
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="about-title-section about-title-section-2 mb-30">
                        <div class="team-thumb">
                            <img src="{{ asset($type->image) }}" alt="">
                        </div>
                        <div class="about-title-section about-title-section-2 mb-30">
                            <h1>{{ $type->thename }}</h1>
                            <p>{{ $type->details }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- team end -->
<!-- counter start -->
<div class="counter-area gray-bg">
    <div class="container pt-90 pb-65">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="couter-wrapper mb-30 text-center">
                    <img src="{{URL::asset('frontend/img/counter/counter_icon2.png')}}" alt="">
                    <span class="counter">{{ \App\Models\Service::count() }}</span>
                    <h3>الخدمات المتاحة</h3>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="couter-wrapper mb-30 text-center">
                    <img src="{{URL::asset('frontend/img/counter/counter_icon3.png')}}" alt="">
                    <span class="counter">{{ \App\Models\Category::count() }}</span>
                    <h3>التصنيفات المتاحة</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->

<!-- faq start -->
<div class="fag-area pt-100 pb-70 mb-">
    <div class="container">
        <div class="faq-list">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="faq-area-title mb-35">
                        <h2 class="mb-15">خدمات حداد الكويت</h2>
                    </div>
                    <div class="faq-wrapper mb-30 wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <div class="accordion" id="accordion">
                            @php
                            $questions = App\Models\Question::latest()->limit(20)->get();
                        @endphp
                        @foreach($questions as $questionss)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="ti-help-alt"></span>
                                            {{ $questionss->question }} 
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        {{ $questionss->answer }}.
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq end -->



@endsection