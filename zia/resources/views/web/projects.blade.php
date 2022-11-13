@extends('layouts.web')

@section('innerstyle')
@if ( Route::current()->getName() !== 'projects-by-service')

    <style>
        .project-content-area .row{
            display: flex;
            flex-wrap: wrap-reverse;
        }
    </style>
@endif
@endsection

@section('content')

    <x-web.inner-header/>

    <div class="our-project-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="project-content-area">
                        <div class="row">
                        @foreach ($projects as $item)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center padding-top">
                                <div class="single-project-one">
                                    <div class="project-feature-image">
                                        <a href="#"><img src="{{asset('storage/assets/projects/'.$item->img)}}" alt=""></a>
                                        <div class="overley">
                                            <ul>
                                                <li><a href="{{$item->link}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h3><a href="single-project.html">{{$item->name}}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>



                        <div class="row">
                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="pagination-area">
                            <ul>
                            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                            </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <x-web.side-services/>
                </div>
            </div>
        </div>
    </div>

    <x-web.cta/>

@endsection

@section('innerJs')

@endsection
