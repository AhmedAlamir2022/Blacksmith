
<footer>
    <div class="footer-area primary-bg pt-150">
        <div class="container">
            <div class="footer-top pb-35">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget mb-30">
                            <div class="footer-logo">
                                <img src="{{URL::asset('frontend/img/logo/logo_2.png')}}" alt="">
                            </div>
                            <div class="footer-para">
                                <p>رقم حداد هندي وباكستاني وايراني بالكويت لأحدث خدمات الحدادة من حداد مظلات كيربي وسيارات وحدائق وحداد عام وحداد تركيب شبابيك وأبواب ودرج حديد, وحداد درابزين معلم محترف يعمل بكل محافظات الكويت 24 ساعة.</p>
                            </div>
                            <div class="footer-socila-icon">
                                <span>يسرنا وجودك معنا على مواقع التواصل الاجتماعى</span>
                                <div class="footer-social-icon-list">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                        <li><a href="#"><span class="ti-email"></span></a></li>
                                        <li><a href="#"><span class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget mb-30">
                            <div class="footer-heading">
                                <h1>بعض اللينكات المهمة</h1>
                            </div>
                            <div class="footer-menu clearfix">
                                <ul>
                                    <li><a href="{{ route('login') }}">دخول الأدمن</a></li>
                                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                    <li><a href="{{ route('contact.me') }}">اتصل بنا</a></li>
                                    <li><a href="{{ route('about.us') }}">من نحن</a></li>
                                    <li><a href="{{ route('privacy') }}">سياسة الخصوصية</a></li>
                                    <li><a href="{{ route('service') }}">الخدمات</a></li>
                                    <li><a href="{{ route('category') }}">التصنيفات</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4  col-md-6">
                        <div class="footer-widget mb-30">
                            <div class="footer-heading">
                                <h1>أتصل بنا</h1>
                            </div>
                            @php
									$quires = App\Models\Query::latest()->limit(1)->get();
								@endphp
								@foreach($quires as $item)
                            <div class="footer-contact-list">
                                <div class="single-footer-contact-info">
                                    <span class="ti-headphone "></span>
                                    <span class="footer-contact-list-text">+ {{ $item->contact }}</span>
                                </div>
                                <div class="single-footer-contact-info">
                                    <span class="ti-email "></span>
                                    <span class="footer-contact-list-text">{{ $item->email }}</span>
                                </div>
                                <div class="single-footer-contact-info">
                                    <span class="ti-location-pin"></span>
                                    <span class="footer-contact-list-text">{{ $item->location }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>