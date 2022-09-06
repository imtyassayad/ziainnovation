@extends('layouts.web')
@section('content')

    <x-web.inner-header/>

    <div class="about-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="about-title-area">
                        <h2>Let’s Introduce About Us</h2>
                        <p>
                            Today, we're proud to empower individuals and small business
                            owners around the world. Everyone deserves a website, and we're
                            excited to create projects for them.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature-image">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate">
                    <div class="about-featured-image">
                        <a href="about.html"><img src="{{ asset('web/img/about/about-image.jpg') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 acurate">
                    <div class="about-main-content">
                        <h4>Who We Are</h4>
                        <h3>We Are Expert In Development|Graphics|video editing</h3>
                        <p>
                            We have over 10 years of experience of building
                            state-of-the-art, easy to use, user-friendly websites and
                            applications is truly a passion of us and we are confident we
                            would be an excellent addition to your organization. In addition
                            to our knowledge base, we actively seek out new technologies and
                            stay up-to-date on industry trends and advancements. This has
                            allowed us to stay ahead of the curve and deliver exceptional
                            work to all of our Client.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row about-service">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-about-services">
                        <div class="service-top">
                            <ul>
                                <li>
                                    <a href="single-services.html"><span class="flaticon-graph"></span></a>
                                </li>
                                <li>
                                    <a href="single-services.html">Development<br />Website|Windwos|Mobile</a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            Software development is the process of conceiving, specifying,
                            designing, programming, documenting, testing, and bug fixing
                            involved in creating and maintaining applications, frameworks,
                            or other software components.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-about-services">
                        <div class="service-top">
                            <ul>
                                <li>
                                    <a href="single-services.html"><span class="flaticon-finances"></span></a>
                                </li>
                                <li>
                                    <a href="single-services.html">Graphics <br />Art work|Templates|Cards</a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            Graphic design is the process of visual communication and
                            problem-solving through the use of typography, photography, and
                            illustration. The field is considered a subset of visual
                            communication design.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-about-services">
                        <div class="service-top">
                            <ul>
                                <li>
                                    <a href="single-services.html"><span class="flaticon-presentation"></span></a>
                                </li>
                                <li>
                                    <a href="single-services.html">Video Editing<br />Logo Reveal|Promotional</a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            Video editing is the manipulation and arrangement of video
                            shots. Video editing is used to structure and present all video
                            information, including films and television shows, video
                            advertisements and video essays.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-web.team/>

@endsection
