<div class="inner-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-page-title">
                    <h2 class="text-capitalize">{{Route::current()->getName()}}</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-page-locator">
                    <ul>
                        <li class="text-capitalize"><a href="{{route('home')}}">home /</a> {{Route::current()->getName()}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
