@extends('template.master')

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