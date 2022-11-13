@extends('layouts.back')
@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget widget-content-area br-4">
                    <div class="widget-one d-flex justify-content-between align-items-center">
                        <h6>Edit Services</h6>
                        <a href="{{route('services.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow">

                    <div class="widget-content widget-content-area" style="height: 571px;">
                        <div class="container px-5">
                            <form action="{{route('services.update',1)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title" autocomplete="none">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Icon</label>
                                        <input type="text" class="form-control" name="icon"  placeholder="Icon">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputAddress">Description</label>
                                   <textarea name="desc" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                              <button type="submit" class="btn btn-primary mt-3" style="float: right" >Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
