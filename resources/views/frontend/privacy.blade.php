@extends('frontend.body.master')

@section('title')
		سياسات الخصوصية
	@endsection
@section('main')

    <!-- slider-start -->
    <div class="slider-area">
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url({{URL::asset('frontend/img/contact/9.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">سياسات الخصوصية</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">سياسات الخصوصية</li>
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
    <!-- faq start -->
    <div class="fag-area pt-100 pb-70 mb-">
        <div class="container">
            <div class="faq-list">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="faq-area-title mb-35">
                            <h2 class="mb-15">سياسات الخصوصية :</h2>
                        </div>
                        <div class="faq-wrapper mb-30 wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <div class="accordion" id="accordion">
                                @php
                                $Privacies = App\Models\Privacy::latest()->limit(20)->get();
                            @endphp
                            @foreach($Privacies as $Privacy)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <span class="ti-help-alt"></span>
                                                {{ $Privacy->question }} ؟
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            {{ $Privacy->answer }}.
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
    <div class="faq-area-bottom pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="faq-area-form">
                        <form method="post" action= "{{ route('store.message') }}">
							{{ csrf_field() }}
                            <div class="row">
                               <div class="col-xl-12">
                                   <div class="faq-form-title text-center">
                                       <h2>هل لديك أى أسئلة ؟</h2>
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
                                    <div class="faq-form-btn text-center">
                                        <button class="btn" type="submit">أرسل الان</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection