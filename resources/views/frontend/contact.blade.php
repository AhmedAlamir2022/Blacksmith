@extends('frontend.body.master')

@section('title')
		اتصل بنا
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
                                <h1 class="white-color f-700">أتصل بنا</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
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
    <div class="advisors-area gray-bg pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="contact-info-text">
                        <div class="section-title mb-20">
                            <div class="section-title-heading mb-10">
                                <h1>اتصل بنا</h1>
                            </div>
                            <div class="section-title-para">
                                <p>يمكن لجميع عملائنا التواصل مع الحداد على الرقم 56585569 أو من خلال البريد الالكتروني:</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <ul>
							@php
									$quires = App\Models\Query::latest()->limit(1)->get();
								@endphp
								@foreach($quires as $item)
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-headphone"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>اتصل بنا</h5>
                                    <span>+ {{ $item->contact }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>البريد الالكترونى</h5>
                                    <span>{{ $item->email }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>العنوان</h5>
                                    <span>{{ $item->location }}</span>
                                </div>
                            </li>
							@endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="events-details-form faq-area-form mb-30 p-0">
                        <form method="post" action= "{{ route('store.message') }}">
							{{ csrf_field() }}
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="events-form-title mb-25">
                                        <h2>هل لديك اى أسئلة ؟</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="الاسم بالكامل " type="text" name="name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="البريد الالكترونى " type="email" name="email" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="رقم التليفون " type="number" name="phone" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="الموضوع " type="text" name="subject" required>
                                </div>
                                <div class="col-xl-12">
                                    <textarea cols="30" rows="10" placeholder="الرسالة " name="message" required></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <div class="faq-form-btn events-form-btn">
                                        <button class="btn m-0" type="submit">أرسل الان</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->

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