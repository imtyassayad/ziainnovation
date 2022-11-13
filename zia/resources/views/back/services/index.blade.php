@extends('layouts.back')
@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget widget-content-area br-4">
                    <div class="widget-one d-flex justify-content-between align-items-center">
                        <h6>Services</h6>
                        <a href="{{route('services.create')}}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow">

                    <div class="widget-content widget-content-area" >
                        <div class="row px-3 ">
                            @foreach ($services as $item)
                            <div class="col-md-4 col-sm-6 col-12 " >
                                <div class="card component-card_1" style="min-height:300px; ">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="card-title">{{$item->title}}</h5>
                                            <i class="far fa-address-book"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{$item->description}}</p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="{{route('services.edit',$item->id)}}" class="btn btn-success">Edit</a>
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


@endsection
