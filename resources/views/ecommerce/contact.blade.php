@extends('layouts.ecommerce')
@section('content')

<main class="main">

    <style>
        .bg-image {
            background-image: url('images/contactbgimage.jpg');
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .send-text {
            display: block;
            margin-top: 10px;
            font: 400 12px 'Lato', sans-serif;
            letter-spacing: 2px;
        }

        .send-button {
            margin-top: 15px;
            height: 34px;
            width: 400px;
            overflow: hidden;
            transition: all .2s ease-in-out;
        }

        .alt-send-button {
            width: 400px;
            height: 34px;
            transition: all .2s ease-in-out;
        }

        .send-text {
            display: block;
            margin-top: 10px;
            font: 700 12px 'Lato', sans-serif;
        }

        .responsive-map {
            overflow: hidden;
            padding-bottom: 75.25%;
            position: relative;
            height: 0;
            width: 200%;
        }

        .responsive-map iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
        </div>
    </nav>

    <div id="map"></div>

    <div class="container contact-us-container">
        <div class="contact-info">
            <div class="row">
                <div class="col-12 bg-image">
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="sicon-location-pin"></i>
                        <div class="feature-box-content">
                            <h3>Address</h3>
                            <h5>
                                @if(isset($companyInfo->address))
                                {{$companyInfo->address}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="fa fa-mobile-alt"></i>
                        <div class="feature-box-content">
                            <h3>Phone Number</h3>
                            <h5>
                                @if(isset($companyInfo->phone))
                                {{$companyInfo->phone}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box text-center">
                        <i class="far fa-envelope"></i>
                        <div class="feature-box-content">
                            <h3>E-mail Address</h3>
                            <h5>
                                @if(isset($companyInfo->email))
                                {{$companyInfo->email}}
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="contact">
                <div class="col-md-6 col-lg-4">
                    <form id="contact-form" method="POST" action="{{ route('send-message') }}" class="form-horizontal"
                        role="form">
                        @csrf
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" placeholder="NAME" name="name"
                                    value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email"
                                    value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="email" placeholder="Subject" name="subject"
                                    value="" required>
                            </div>
                        </div>

                        <textarea class="form-control" rows="5" placeholder="MESSAGE" name="message" required>
                        </textarea>
                        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                            <div class="alt-send-button">
                                <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                            </div>
                        </button>
                    </form>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="responsive-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="mb-8"></div>
</main>
@endsection

<script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });
</script>
