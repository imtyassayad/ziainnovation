@extends('layouts.web')
@section('innerstyle')

@endsection
@section('content')

    <x-web.inner-header/>

    <div class="contact-us-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-us-page">
                        <h2>Contact Information</h2>
                        <p>It's through vulnerability that human beings create connections. The more vulnerable we can
                            be with one another, the more that we'll trust one another and the more we'll be able to
                            collaborate effectively</p>
                    </div>
                </div>
            </div>
            <div class="row contact-box">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact-box">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Tanish srushti, Alandi markal
                            road,<br /><span>Pune-412105, Maharashtra.</span></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact-box">
                        <!-- <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="https://digitalcenturysf.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf5f2faf3dceaf5f7e8f3eefaf5f2fdf2fff9b2fff3f1">[email&#160;protected]</a><br /><span><a href="https://digitalcenturysf.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="83d0f6f3f3ecf1f7c3f5eae8f7ecf1e5eaede2ede0e6ade0ecee">[email&#160;protected]</a></span></p> -->
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i>info@ziainnovation.com</span></p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i>sale@ziainnovation.com</span></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-contact-box last-child">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> +91 7769 03 5251 <br /> <span>+91 8070 10
                                1017</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="leave-comments-area">
                        <h4>Leave Coomments</h4>
                        <form action="mail.php" method="POST">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name*"
                                            name="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*"
                                            name="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="phone*" name="phone">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea cols="40" rows="10" class="textarea form-control"
                                            placeholder="Your Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn-send" type="submit" name="submit">Send Message</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-web.cta/>

@endsection
@section('innerjs')

@endsection
