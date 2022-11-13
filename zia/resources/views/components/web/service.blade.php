<div class="service-area">
    <div class="container">
        <div class="row">
            @foreach ($services as $item)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="media">
                            <div class="pull-left">
                                <a href="{{route('services.show',$item->id)}}">
                                    <span class="{{$item->icon}}"></span>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="{{route('services.show',$item->id)}}">{{$item->title}}</a>
                                </h4>
                                <p>
                                    {{$item->description}}
                                </p>
                                <div class="read-more">
                                    <!-- <a href="single-services.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="media">
                        <div class="pull-left">
                            <a href="single-services.html">
                                <span class="flaticon-finances"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="single-services.html">Graphics Design</a>
                            </h4>
                            <p>
                                Graphic design is the process of visual communication and
                                problem-solving through the use of typography, photography,
                                and illustration. The field is considered a subset of visual
                                communication design.
                            </p>
                            <div class="read-more">
                                <!-- <a href="single-services.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="media">
                        <div class="pull-left">
                            <a href="single-services.html">
                                <span class="flaticon-presentation"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="single-services.html">Video Editing</a>
                            </h4>
                            <p>
                                Video editing is the manipulation and arrangement of video
                                shots. Video editing is used to structure and present all
                                video information, including films and television shows,
                                video advertisements and video essays.
                            </p>
                            <div class="read-more">
                                <!-- <a href="single-services.html">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
