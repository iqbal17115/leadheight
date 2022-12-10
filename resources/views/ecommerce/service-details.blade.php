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
            <div class="col-md-5" style="margin-top: 19px;">
                <img src="https://www.pngmart.com/files/15/Apple-iPhone-11-PNG-Image.png" class="img-fluid"
                    alt="Responsive image">
            </div>
            <div class="col-md-7" style="margin-top: 78px;">
                <p class="text-capitalize">Design a better future</p>
                <p class="text--glitch" data-text="GLITCH TEXT">
                    GLITCH TEXT
                </p>
                <p class="text-capitalize text-style" style="margin-top: 25px;">Every month, more than three billion individuals use social media
                    throughout the world, the number of users and engagement on major platforms continues to rise and
                    help you to raise brand awareness.</p>
            </div>
        </div>
    </div>
</main>
@endsection
