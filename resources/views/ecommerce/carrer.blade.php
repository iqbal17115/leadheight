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
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="col-md-12" style="background-color: white">
            <div class="col-md-6" style="width: 400px; margin-left: 20px;">
                <img src="{{ URL::asset('assets/images/carrer-bg-image.jpg')}}" width="300px;" alt="..."
                    class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <h1 style="font-size: 31px;">Accelerate Your Carrer with new-age marketing skills in the digital World
                </h1>
                <h2 style="font-size: 25px;">DROP <span style="color: rgb(251,79,32);">YOUR CV</span> NOW</h2>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($getjobcerculerss as $getjobcerculers)
            <div class="col-md-4">
                <div class="card" style="width: 30rem; margin-left: 50px; margin-top: 25px;">
                    <img class="card-img-top" src="{{ asset('storage/photo/' .$getjobcerculers->cerculer_image) }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title text-center">{{$getjobcerculers->job_title}}</h5>
                    <div class="col text-center">
                        <a href="#" class="btn btn-primary text-center">Apply Now</a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
