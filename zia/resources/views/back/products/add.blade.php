@extends('layouts.back')
@section('innerStlye')
    <link href="{{asset('back/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('back/plugins/select2/select2.min.css')}}">
    <link href="{{asset('back/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .custom-file-container__image-preview{
            height: 150px;
            width: 100%;
            margin: 0;
        }
    </style>
@endsection
@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget widget-content-area br-4">
                    <div class="widget-one d-flex justify-content-between align-items-center">
                        <h6>Add Product</h6>
                        <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow">
                    {{-- <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Form controls</h4>
                            </div>
                        </div>
                    </div> --}}
                    <div class="widget-content widget-content-area" style="height: 60%;">
                        <div class="container px-5">
                            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Service</label>
                                        <select name="service"   class="form-control basic" >
                                            <option value="">-- Select Service --</option>
                                            @foreach ($services as $item)
                                                <option value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="none">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Slug</label>
                                        <input type="text" class="form-control" placeholder="Slug" name="slug" autocomplete="none">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Status</label>
                                        <select name="status"  class="form-control">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inputAddress">Description</label>
                                   <textarea name="desc" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    <div class="form-group col-md-8">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="img" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                    </div>

                                </div>
                                </div>
                              <button type="submit" class="btn btn-primary mt-3" style="float: right" >Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('innerJs')
  <!--  BEGIN CUSTOM SCRIPTS FILE  -->
  <script src="{{asset('back/assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('back/plugins/select2/select2.min.js')}}"></script>
  <script src="{{asset('back/plugins/select2/custom-select2.js')}}"></script>
  <script src="{{asset('back/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
  <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script>
        var ss = $(".basic").select2({
            tags: true,
        });
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
@endsection
