@extends('template.master')
<style>
.portfolio-box img {
    width: 100%;
    height: 100%;
    object-fit:cover;
}
.portfolio-box {
    height: 300px ;
}

</style>
@section('masthead')
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">{{$masthead->title}}</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <!-- <p class="text-white-75 mb-5"> -->
                    {!! $masthead->body !!}
                <!-- </p> -->
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
</header>
@endsection
@section('about')
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">{{$about->title}}</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">
                    {!!$about->body!!}
                </p>
                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('service')
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">{{$service->title}}</h3>
                    <p class="text-muted mb-0">{!!$service->body!!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@section('portfolio')
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="{{asset('storage/'.$portfolio->image)}}" title="{{$portfolio->title}}">
                    <img class="w-100" src="{{asset('storage/'.$portfolio->image)}}" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">{{$portfolio->title}}</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection