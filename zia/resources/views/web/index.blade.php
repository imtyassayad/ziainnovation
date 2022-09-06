@extends('layouts.web')
@section('innerstyle')

@endsection
@section('content')
    <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('web/img/slider/slide1.jpg') }}" alt="" title="#slider-direction-1" />
                <img src="{{ asset('web/img/slider/slide2.jpg') }}" alt="" title="#slider-direction-2" />
                <img src="{{ asset('web/img/slider/slide3.jpg') }}" alt="" title="#slider-direction-3" />
            </div>

            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <h1 class="title1">Grow Your Business</h1>
                        <div class="title2">
                            In today's fast-paced world, it's vitally important to work with
                            a proven, reliable outsourcing partner you can count on to keep
                            abreast of the technology, the one who shares the risks as well
                            as the successes, helping you to focus on your core business
                        </div>
                        <div class="slider-botton">
                            <ul>
                                <li class="acitve">
                                    <a href="about.html">Know More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">Planning Your Business</h1>
                        <div class="title2">
                            Our Zia Innovation teams are flexible, cost effective, and easy
                            to work with. Zia Innovation is an effective way to expand your
                            software capabilities while saving time and money.
                        </div>
                        <div class="slider-botton">
                            <ul>
                                <li class="acitve">
                                    <a href="about.html">Know More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <h1 class="title1">We Make Your Bussiness online</h1>
                        <div class="title2">
                            At First Line Software, with every project, with every client,
                            we are ever mindful of BOTH aspects: the best application of the
                            best technology for the need, and building partnerships with
                            those to whom we provide software development services.
                        </div>
                        <div class="slider-botton">
                            <ul>
                                <li class="acitve">
                                    <a href="about.html">Know More
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-web.service/>

    <div class="home-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-content-area">
                        <div class="about-content-area">
                            <h2>Know About <span>Zia Innovation</span></h2>
                            <p>
                                We have over 10 years of experience of building
                                state-of-the-art, easy to use, user-friendly websites and
                                applications is truly a passion of us and we are confident we
                                would be an excellent addition to your organization. In
                                addition to our knowledge base, we actively seek out new
                                technologies and stay up-to-date on industry trends and
                                advancements. This has allowed us to stay ahead of the curve
                                and deliver exceptional work to all of our Client.
                            </p>
                            <div class="botton-area">
                                <a href="about.html">Know More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-featured-image">
                        <a href="about.html"><img src="{{ asset('web/img/about/about.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-page-core-activities-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="home-activities-area">
                        <h2>Zia Innovation</h2>
                        <div class="single-activities">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <span class="flaticon-presentation"></span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Developemt</a></h4>
                                    <p>
                                        Software development is the process of conceiving,
                                        specifying, designing, programming, documenting, testing,
                                        and bug fixing involved in creating and maintaining
                                        applications, frameworks, or other software components.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-activities">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <span class="flaticon-graph"></span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">Graphics Design</a>
                                    </h4>
                                    <p>
                                        Graphic design is the process of visual communication and
                                        problem-solving through the use of typography,
                                        photography, and illustration. The field is considered a
                                        subset of visual communication design.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-activities">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <span class="flaticon-piggy-bank"></span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Video Editing</a></h4>
                                    <p>
                                        Video editing is the manipulation and arrangement of video
                                        shots. Video editing is used to structure and present all
                                        video information, including films and television shows,
                                        video advertisements and video essays.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-faq-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-area">
                        <h2>Frequently Asked Questions</h2>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Why do i need website?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        A professional website drives sales. Nearly 70% of
                                        consumers agree that they are more likely to buy from a
                                        business that has a website over one that does not.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            What will be the cost of website?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Depending on your needs, building a website can cost
                                        anywhere between $100 and $500. If you need a
                                        feature-rich, custom-built website, it can go as high as
                                        $30,000 or more. Where Zia Innovation provides you
                                        Complete web solution in your Budget and with after sale
                                        service.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How much time it will take?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        A typical website will take 14 weeks at a minimum from
                                        start to launch. This includes 3 weeks discovery, 6 weeks
                                        design, 3 weeks initial development, and 2 weeks of
                                        modifications. It could take much longer if you wait until
                                        the end to start writing content. where zia Innovation
                                        expertise deliver within your time limit.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="headingFour">
                                            How do i choose website for my bussiness?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="collapseFour">
                                    <div class="panel-body">
                                        Do you have a great idea for an online business? Then the
                                        next step is registering a domain name. Selecting the
                                        right domain is crucial, and could be the difference
                                        between your business’ success and failure. Not sure where
                                        to begin? Here Zia Innovaton takes all your headache and
                                        porvide you with one stop solution.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-image-area">
                        <a href="about.html"><img src="{{ asset('web/img/faq1.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-counter-down-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="home-counter-down-title">
                        <h2>We have <span>10 Years</span></h2>
                        <p>Of Experiences</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="ab-count">
                        <div class="col-md-4">
                            <div class="about-counter-list">
                                <h1 class="about-counter">50</h1>
                                <p>Clients</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="about-counter-list">
                                <h1 class="about-counter">150</h1>
                                <p>Projects</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="about-counter-list last-child">
                                <h1 class="about-counter">02</h1>
                                <p>Adwards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-web.team/>

    {{-- <x-web.cta/> --}}

    <div class="home-callback-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-back-content">
                        <h2>Request For Call Back</h2>
                        <p>
                            Please complete the information so we can contact you to provide
                            you with a quote. If you would like speak with one of our team,
                            please contact us at +91 8070 10 10 17.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-back-form">
                        <form action="home_mail.php" method="POST">
                            <fieldset>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" name="work">
                                            <option>Planning for Website</option>
                                            <option>Planning for Web Application</option>
                                            <option>Planning for Windows Application</option>
                                            <option>Planning for Mobile Application</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name*"
                                            name="firstname" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*"
                                            name="lastname" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*"
                                            name="email" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone*"
                                            name="phone" />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn-send" type="submit" name="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="site-section-area">
                        <h2>Key features</h2>
                        <p>
                            A product characteristic for which reasonably anticipated
                            variation is likely to significantly affect customer
                            satisfaction such...
                        </p>
                    </div>
                </div>
            </div>
            <div class="row total-homenews">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="single-news.html"><img src="{{ asset('web/img/news/1.png') }}" alt="" /></a>
                            <div class="news-date">
                                <p>10 <br />June<br />2016</p>
                            </div>
                        </div>
                        <h3>
                            <a href="single-news.html">Why People Choose Zia Innovation</a>
                        </h3>
                        <p>
                            We create every project from sratch. with proper planning and
                            customer requirment
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="single-news.html"><img src="{{ asset('web/img/news/2.png') }}" alt="" /></a>
                            <div class="news-date">
                            <p>10 <br />June<br />2016</p>
                            </div>
                        </div>
                        <h3>
                            <a href="single-news.html">Why People Choose Zia Innovation</a>
                        </h3>
                        <p>
                            We have experienced designer who have created awsome UI designs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-news">
                        <div class="news-image">
                            <a href="single-news.html"><img src="{{ asset('web/img/news/3.png') }}"
                                    alt="" /></a>
                            <div class="news-date">
                                <p>10 <br />June<br />2016</p>
                                </div>
                        </div>
                        <h3>
                            <a href="single-news.html">Why People Choose Zia Innovation</a>
                        </h3>
                        <p>
                            We are expertise in UX- the backend and server side coding. we
                            create Application with 0 Error.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-testimonial-area">
        <div class="container">
            <div class="row">
                <div class="total-testimonial">
                    <div class="home-testimonial">
                        <div class="single-testimonial text-center">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply
                                dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since
                                thewhen an unknown printer took.
                            </p>
                            <div class="details">
                                <h3>Mr. Mack Magragor</h3>
                                <p>CEO, Advisor</p>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply
                                dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since
                                thewhen an unknown printer took.
                            </p>
                            <div class="details">
                                <h3>Javis Rey</h3>
                                <p>CEO</p>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>Gimply
                                dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since
                                thewhen an unknown printer took.
                            </p>
                            <div class="details">
                                <h3>Mr. Mack Magragor</h3>
                                <p>CEO, Advisor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('innerjs')

@endsection
