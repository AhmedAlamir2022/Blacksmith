<header id="home" >
    <div class="header-area header-sticky">
        <!-- header-top -->
        <div class="header-top primary-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="header-contact-info d-flex">
                            @php
									$quires = App\Models\Query::latest()->limit(1)->get();
								@endphp
								@foreach($quires as $item)
                            <div class="header-contact header-contact-phone">
                                <span class="ti-headphone"></span>
                                <p class="phone-number">+ {{ $item->contact }}</p>
                            </div>
                            <div class="header-contact header-contact-email">
                                <span class="ti-email"></span>
                                <p class="email-name">{{ $item->email }}</p>
                            </div>@endforeach
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="header-social-icon-list">
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
        </div>
        <!-- /end header-top -->
        <!-- header-bottom -->
        <div class="header-bottom-area" style="transition: .6s;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a href="index_2.html">
                                <img src="{{URL::asset('frontend/img/logo/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                        <div class="header-bottom-icon f-right">
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                                    <li><a href="{{ route('about.us') }}">من نحن</a></li>
                                    <li><a href="{{ route('privacy') }}">سياسة الخصوصيه</a></li>
                                    <li><a href="{{ route('category') }}">التصنيفات</a></li>
                                    <li><a href="{{ route('service') }}">الخدمات</a></li>
                                    <li><a href="{{ route('contact.me') }}">اتصل بنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /end header-bottom -->
    </div>
</header>