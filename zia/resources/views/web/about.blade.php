@extends('layouts.web')
@section('content')
<div class="inner-page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="header-page-title">
            <h2>About</h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="header-page-locator">
            <ul>
              <li><a href="index.html">Home /</a> About</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

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
        <div
          class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center acurate"
        >
          <div class="about-featured-image">
            <a href="about.html"
              ><img src="{{asset('web/img/about/about-image.jpg')}}" alt=""
            /></a>
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
                  <a href="single-services.html"
                    ><span class="flaticon-graph"></span
                  ></a>
                </li>
                <li>
                  <a href="single-services.html"
                    >Development<br />Website|Windwos|Mobile</a
                  >
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
                  <a href="single-services.html"
                    ><span class="flaticon-finances"></span
                  ></a>
                </li>
                <li>
                  <a href="single-services.html"
                    >Graphics <br />Art work|Templates|Cards</a
                  >
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
                  <a href="single-services.html"
                    ><span class="flaticon-presentation"></span
                  ></a>
                </li>
                <li>
                  <a href="single-services.html"
                    >Video Editing<br />Logo Reveal|Promotional</a
                  >
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

  <div class="home-team-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <div class="site-section-area">
            <h2>Our Expert Team</h2>
            <p>
              We love to show off the awesome people who are responsible for
              keeping our business booming.
            </p>
          </div>
        </div>
      </div>
      <div class="row total-team">
        <div class="text-center">
          <div class="single-team">
            <div class="overley">
              <a href="#">
                <img src="{{asset('web/img/team/1.png')}}" alt="" />
              </a>
              <div class="social-media-icons">
                <ul>
                  <li>
                    <a href="#"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-google" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-details">
              <h3><a href="#">Ms. Zara Thapar</a></h3>
              <p>Manager</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="single-team">
            <div class="overley">
              <a href="#">
                <img src="{{asset('web/img/team/2.png')}}" alt="" />
              </a>
              <div class="social-media-icons">
                <ul>
                  <li>
                    <a href="#"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-google" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-details">
              <h3><a href="#">Mr. David Smith</a></h3>
              <p>Accountance</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="single-team">
            <div class="overley">
              <a href="#">
                <img src="{{asset('web/img/team/3.png')}}" alt="" />
              </a>
              <div class="social-media-icons">
                <ul>
                  <li>
                    <a href="#"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-google" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-details">
              <h3><a href="#">Ms. Farhana Ema</a></h3>
              <p>HR</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="single-team">
            <div class="overley">
              <a href="#">
                <img src="{{asset('web/img/team/4.png')}}" alt="" />
              </a>
              <div class="social-media-icons">
                <ul>
                  <li>
                    <a href="#"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-google" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-details">
              <h3><a href="#">Mr. David Luice</a></h3>
              <p>Director</p>
            </div>
          </div>
        </div>
        <!-- <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/1.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Ms. Zara Thapar</a></h3>
          <p>Manager</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/2.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Mr. David Smith</a></h3>
          <p>Accountance</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/3.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Ms. Farhana Ema</a></h3>
          <p>Manager</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/4.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Mr. David Luice</a></h3>
          <p>Manager</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/2.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Mr. David Smith</a></h3>
          <p>Accountance</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/3.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Ms. Farhana Ema</a></h3>
          <p>Manager</p>
          </div>
          </div>
          </div>
          <div class="text-center">
          <div class="single-team">
          <div class="overley">
          <a href="#">
          <img src="{{asset('web/img/team/4.png')}}" alt="">
          </a>
          <div class="social-media-icons">
          <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="team-details">
          <h3><a href="#">Mr. David Luice</a></h3>
          <p>Manager</p>
          </div>
          </div>
          </div> -->
      </div>
    </div>
  </div>
@endsection
