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

    .second-method{
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
        <div class="col-md-12 center shadow" style="background-color: white">
            <h1>Pay Now</h1>
        </div>

        <div class="col-md-12 shadow" style="background-color: white">
            <h1>Online Payment</h1>
        </div>
        @if ($PayNows)
            <div class="col-md-12 center" style="background-color: #DEFFF4">
                <div class="col-md-6 methodNamePosition">
                    <p class="methodName" style="margin-top: 31px;">
                        {{$PayNows[0]->payment_method_name}}
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/photo/' .$PayNows[0]->image) }}" alt="..." class="img-thumbnail">
                </div>
            </div>
        @endif
        @foreach($PayNowwithGeneral as $PayNowwithGenerals)
                <div class="col-md-12 center" style="background-color: #FAF3FB">
                    <div class="col-md-6">
                        <p class="second-method" style="margin-top: 31px;">
                            {{$PayNowwithGenerals->payment_method_name}}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h1 class="content-heading-description">
                            {!!$PayNowwithGenerals->description!!}
                        </h1>
                    </div>
                </div>
        @endforeach
    </div>
</main>
@endsection
