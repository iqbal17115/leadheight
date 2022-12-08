@extends('layouts.ecommerce')
@section('content')
<main class="main about">

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home<i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Terms & Condition</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="about-section">
        <div class="container">
            <h2 class="subtitle" style="margin-left: 15px;">Terms & Condition</h2>
            @if ($companyInfo)
                {!! $companyInfo->terms_condition !!}
            @endif
        </div><!-- End .container -->
    </div><!-- End .about-section -->

</main><!-- End .main -->
@endsection
