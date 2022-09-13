<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li>
                                <i class="fa fa-globe" aria-hidden="true"></i> Welcome to
                                Zia Innovation Services, we have over 10 years of expertise
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <!-- <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="https://digitalcenturysf.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f567179705f6976746b706d317c7072">[email&#160;protected]</a></li> -->
                            <li>
                                <a href="mailto:support@ziainnovation.com" style="color: #cacaca">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    support@ziainnovation.com
                                </a>
                            </li>

                            <li>
                                <a href="tel:+918070101017" style="color: #cacaca">
                                    <i class="fa fa-phone" aria-hidden="true"></i> +91 8070 10
                                    10 17
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="{{route('home')}}"><img src="{{asset('web/img/zia_logo1.png')}}" alt="site logo" /></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 acurate"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="main-menu">
                        <ul>
                            <li class="{{request()->is('/') ? 'active' : ''}}">
                                <a href="{{route('home')}}">Home <span></span> </a>
                            </li>
                            <li class="{{request()->is('about') ? 'active' : ''}}"><a href="{{route('about')}}">About </a></li>
                            <li class="{{request()->is('services') ? 'active' : ''}}">
                                <a href="{{route('services')}}">Services <span></span></a>
                            </li>
                            <li class="{{request()->is('projects') ? 'active' : ''}}">
                                <a href="{{route('projects')}}">Projects <span></span> </a>
                            </li>
                            <li class="{{request()->is('products') ? 'active' : ''}}">
                                <a href="{{route('products')}}">Products <span></span> </a>
                            </li>
                            <!-- <li><a href="news.html">Graphics <span></span> </a>
                            </li>
                            <li><a href="#">Videos <span></span> </a>
                                <ul>
                                    <li><a href="single-services.html">Logo reveal</a></li>
                                    <li><a href="single-project.html">Promption Vidoes</a></li>
                                    <li><a href="single-news.html">Single News</a></li>
                                    <li><a href="404.html">Error Page</a></li>
                                </ul>
                            </li> -->
                            <li class="{{request()->is('contact') ? 'active' : ''}}"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="active">
                                    <a href="{{route('home')}}">Home <span></span> </a>
                                </li>
                                <li><a href="about.html">About </a></li>
                                <li>
                                    <a href="services.html">Services <span></span></a>
                                </li>
                                <li>
                                    <a href="project.html">Projects <span></span> </a>
                                    <!-- </li>
                                    <li><a href="news.html"> Graphics <span></span> </a>
                                    </li>
                                    <li><a href="#">Videos <span></span> </a>
                                        <ul>
                                            <li><a href="single-services.html">Logo reveal</a></li>
                                            <li><a href="single-project.html">Promotional video</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                            <li><a href="404.html">Error Page</a></li>
                                        </ul>
                                    </li> -->
                                </li>

                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
