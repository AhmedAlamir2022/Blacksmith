@extends('frontend.body.master')

@section('title')
		من نحن
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
                            <h1 class="white-color f-700">من نحن</h1>
                            <nav class="text-center" aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">من نحن</li>
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
<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about-title-section about-title-section-2 mb-30">
                    <h1>من نحن</h1>
                    <p>نحن من أكبر الحدادين في الكويت (حداد هندي – حداد باكستاني – حداد ايراني – حداد مصري)

                        نعمل في هذا المجال منذ أكثر من 20 عام في الكويت, وخدماتنا كثيرة وأهمها:
                        
                        تركيب ستائر
                        تركيب مظلات (للحدائق – السيارات – المدارس – المساجد – …)
                        تركيب وتصميم أبواب حديد
                        تركيب وتصميم شبابيك حديد
                        تصميم مظلات
                        تركيب درج حديد
                        تركيب درابزين
                        والكثير من أعمال الصيانة والتصميم, ويمكن لجميع عملائنا التواصل المباشر معنا عبر الرقم 56585569 أو عن طريق البريد الالكتروني</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about-title-section about-title-section-2 mb-30">
                    <h1>نبذه عنا</h1>
                    <p>رقم حداد هندي وباكستاني وايراني بالكويت لأحدث خدمات الحدادة من حداد مظلات كيربي وسيارات وحدائق وحداد عام وحداد تركيب شبابيك وأبواب ودرج حديد, وحداد درابزين معلم محترف يعمل بكل محافظات الكويت 24 ساعة.

                        يمكنك التواصل مع حداد الكويت على رقم الهاتف المباشر 56585569 و عن طريق الواتساب أيضاً, من أي مكان وفي أي وقت.</p>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-12">
                <div class="university-banner mb-30">
                    <img src="{{URL::asset('frontend/img/about/news-10.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->
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