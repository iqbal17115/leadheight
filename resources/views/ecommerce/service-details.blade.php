@extends('layouts.ecommerce')
@section('content')
<style>
    .shadow {
        background-color: rgb(226, 222, 220);
        box-shadow: 4px 4px 4px 4px;
    }

    .methodNamePosition {
        position: relative;
    }

    .methodName {
        position: absolute;
        top: 50%;
        left: 10%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 20px;
    }

    .second-method {
        font-size: 20px;
        margin-top: 20px;
    }

    .center {
        display: flex;
        justify-content: center;
    }

    .page-header {
        padding-bottom: 3px;
        margin: -31px 0 20px;
        border-bottom: 1px solid #eee;
    }

    .text-style {
        display: block;
        /* or inline-block */
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow: hidden;
        max-height: 3.6em;
        line-height: 1.8em;
    }

    .text--glitch {
        margin: 0;
        color: #a19191;
        font-size: 3rem;
        font-weight: 700;
        position: relative;
        letter-spacing: .025em;
        text-transform: uppercase;

        text-shadow: .05em 0 0 rgba(255, 0, 0, .75),
            -.05em -.025em 0 rgba(0, 255, 0, .75),
            .025em .05em 0 rgba(0, 0, 255, .75);

        animation: glitch 525ms infinite;
    }

    .text--glitch::before,
    .text--glitch::after {
        content: attr(data-text);
        position: absolute;
        letter-spacing: .025em;
        top: 0;
        left: 0;
        opacity: .7;
    }

    .text--glitch::before {
        animation: glitch 675ms infinite;
        transform: translate(-.035em, -.025em);
        clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
    }

    .text--glitch::after {
        animation: glitch 333ms infinite;
        transform: translate(.035em, .025em);
        clip-path: polygon(0 60%, 100% 60%, 100% 100%, 0 100%);
    }

    @keyframes glitch {
        0% {
            text-shadow: .05em 0 0 rgba(255, 0, 0, .75),
                -.05em -.025em 0 rgba(0, 255, 0, .75),
                .025em .05em 0 rgba(0, 0, 255, .75);
        }

        14% {
            text-shadow: .05em 0 0 rgba(255, 0, 0, .75),
                -.05em -.025em 0 rgba(0, 255, 0, .75),
                .025em .05em 0 rgba(0, 0, 255, .75);
        }

        15% {
            text-shadow: -.05em -.025em 0 rgba(255, 0, 0, .75),
                .025em .025em 0 rgba(0, 255, 0, .75),
                -.05em -.05em 0 rgba(0, 0, 255, .75);
        }

        49% {
            text-shadow: -.05em -.025em 0 rgba(255, 0, 0, .75),
                .025em .025em 0 rgba(0, 255, 0, .75),
                -.05em -.05em 0 rgba(0, 0, 255, .75);
        }

        50% {
            text-shadow: .025em .05em 0 rgba(255, 0, 0, .75),
                .05em 0 0 rgba(0, 255, 0, .75),
                0 -.05em 0 rgba(0, 0, 255, .75);
        }

        99% {
            text-shadow: .025em .05em 0 rgba(255, 0, 0, .75),
                .05em 0 0 rgba(0, 255, 0, .75),
                0 -.05em 0 rgba(0, 0, 255, .75);
        }

        100% {
            text-shadow: -.025em 0 0 rgba(255, 0, 0, .75),
                -.025em -.025em 0 rgba(0, 255, 0, .75),
                -.025em -.05em 0 rgba(0, 0, 255, .75);
        }
    }


    @media(prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            transition-delay: 0s !important;
            animation-delay: -1ms !important;
            scroll-behavior: auto !important;
            animation-duration: 1ms !important;
            transition-duration: 0s !important;
            animation-iteration-count: 1 !important;
            background-attachment: initial !important;
        }
    }

    // Tables
    .card {
        border: 0;
        border-radius: 0px;
        -webkit-box-shadow: 0 3px 0px 0 rgba(0, 0, 0, .08);
        box-shadow: 0 3px 0px 0 rgba(0, 0, 0, .08);
        transition: all .3s ease-in-out;
        padding: 2.25rem 0;
        position: relative;
        will-change: transform;

        &:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 5px;
            background-color: $primary-color;
            transition: 0.5s;
        }

        &:hover {
            transform: scale(1.05);
            -webkit-box-shadow: 0 20px 35px 0 rgba(0, 0, 0, .08);
            box-shadow: 0 20px 35px 0 rgba(0, 0, 0, .08);

            &:after {
                width: 100%;
            }

        }

        & .card-header {
            background-color: white;
            padding-left: 2rem;
            border-bottom: 0px;
        }

        & .card-title {
            margin-bottom: 1rem;
        }

        & .card-block {
            padding-top: 0;
        }

        & .list-group-item {
            border: 0px;
            padding: .25rem;
            color: $main-font-color;
            font-weight: $main-font-weight;
        }
    }

    // Price
    .display-2 {
        font-size: 7rem;
        letter-spacing: -.5rem;

        & .currency {
            font-size: 2.75rem;
            position: relative;
            font-weight: $main-font-weight + 100;
            top: -45px;
            letter-spacing: 0px;
        }

        & .period {
            font-size: 1rem;
            color: lighten($main-font-color, 20%);
            letter-spacing: 0px;
        }
    }

    // Buttons
    .btn {
        text-transform: uppercase;
        font-size: .75rem;
        font-weight: $main-font-weight + 200;
        color: lighten($main-font-color, 15%);
        border-radius: 0;
        padding: .75rem 1.25rem;
        letter-spacing: 1px;
    }

    .btn-gradient {
        background-color: #f2f2f2;
        transition: background .3s ease-in-out;

        &:hover {
            color: white;
            background-color: $primary-color;
        }
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="col-md-12 center" style="margin-top: 20px;">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Quick Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            @if ($services)
                <div class="col-md-5" style="margin-top: 19px;">
                    <img src="{{ url('storage/photo/'.$services[0]->image1) }}" class="img-fluid"
                        alt="Responsive image">
                </div>
                <div class="col-md-7" style="margin-top: 78px;">
                    <p class="text-capitalize">{{$services[0]->heading}}</p>
                    <p class="text--glitch" data-text="GLITCH TEXT">
                        {{$services[0]->title}}
                    </p>
                    <p class="text-capitalize text-style" style="margin-top: 25px;">{!!$services[0]->description!!}</p>
                </div>
            @endif
        </div>

        <div class="col-md-12 text-center" style="margin-top: 48px;">
            <p class="text-capitalize" style="font-size: 34px; ">
                Select Our Flexible Plan
            </p>
            <p class="text-capitalize" style="font-size: 22px; line-height: 47px;">Curated to meet the latest business
                challenge</p>
        </div>

        <div class="container">
            <div class="row flex-items-xs-middle flex-items-xs-center">
                <!-- Table #1  -->
                <div class="col-xs-12 col-lg-4">
                    @foreach ($services as $service)
                        @foreach ($service->Package as $singlepackage)
                            <div class="card text-xs-center">
                                <div class="card-header text-center" style="height: 50px;">
                                    <h3 class="display-2"><span class="currency">$</span>{{$singlepackage->price}}<span class="period">/month</span>
                                    </h3>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title text-center">
                                        {{$singlepackage->name}}
                                    </h4>
                                    <ul class="list-group text-center">
                                        <li class="list-group-item">{!!$singlepackage->description!!}</li>
                                        {{-- <li class="list-group-item">Responsive Ready</li>
                                        <li class="list-group-item">Visual Composer Included</li>
                                        <li class="list-group-item">24/7 Support System</li> --}}
                                    </ul>
                                    <div class="text-center" style="height: 50px;">
                                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center" style="margin-top: 20px;">
            <p class="text-capitalize" style="font-size: 34px; ">
                Our Stunning Portfolios
            </p>
        </div>
        <div class="row">
            <div class="container">
                @foreach ($services as $service)
                   @foreach ($service->Portfolio as $singlePortfolio)
                        <div class="col-md-6" style="margin-top: 44px;">
                            <div class="card mb-3">
                                <img class="card-img-top" src="{{ url('storage/photo/'.$singlePortfolio->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 24px; margin-left: 18px;">{{$singlePortfolio->name}}</h5>
                                    <p class="card-text" style="font-size: 18px; margin-left: 15px;">This is a wider card with supporting text below as a natural lead-in to
                                        additional content. This content is a little bit longer.</p>
                                        <div class="text-center" style="padding-bottom: 11px; padding-top: 9px;">
                                            <a class="btn btn-primary" href="#" role="button">{{$singlePortfolio->link}}</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
