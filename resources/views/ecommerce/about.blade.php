@extends('layouts.ecommerce')
@section('content')
<style>
    .center {
        display: flex;
        justify-content: center;
    }

    .containerss {
        position: relative;
        text-align: center;
        color: white;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        font-size: 36px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .heading-latest {
        color: #FFFFFF;
        font-family: "Roboto", Sans-serif;
        font-size: 19px;
        font-weight: 400;
    }

    .content-heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        font-size: 26px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .content-heading-description {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        line-height: 1.2;
        font-size: 21px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .vission_heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 66px;
        font-size: 25px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .vission_sub_heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 38px;
        font-size: 25px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .vission_description {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 66px;
        line-height: 1.4;
        font-size: 20px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .mission_heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 66px;
        font-size: 25px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .mission_sub_heading {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 19px;
        font-size: 25px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .mission_description {
        font-family: Arial, Helvetica, sans-serif;
        color: #FFFFFF;
        margin-top: 66px;
        line-height: 1.4;
        font-size: 20px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
    }

    .making_marketing {
        font-family: 'Circular-Loom';
        color: #FFFFFF;
        margin-top: 101px;
        font-size: 51px;
        text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);
        height: 128px;
    }


    .page-header {
        padding-bottom: 3px;
        margin: -31px 0 20px;
        border-bottom: 1px solid #eee;
    }

    .button {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: #f72359;
        padding: 1em 2em;
        border: none;
        color: white;
        font-size: 1.2em;
        cursor: pointer;
        outline: none;
        overflow: hidden;
        border-radius: 100px;
    }

    .button span {
        position: relative;
        pointer-events: none;
    }

    .button::before {
        --size: 0;
        content: '';
        position: absolute;
        left: var(--x);
        top: var(--y);
        width: var(--size);
        height: var(--size);
        background: radial-gradient(circle closest-side, #4405f7, transparent);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        transition: width .2s ease, height .2s ease;
    }

    .button:hover::before {
        --size: 400px;
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="col-md-12 center" style="background-color: #221A69">
            <div class="col-md-6 ml-6">
                <img src="{{ URL::asset('images/Experience.jpg')}}"
                    alt="..." class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <p class="heading" style="margin-top: 29px;">
                    @if(isset($AboutUsInfo->heading))
                    {{$AboutUsInfo->heading}}
                    @endif
                </p>
                <p class="heading">
                    @if(isset($AboutUsInfo->sub_heading))
                    {{$AboutUsInfo->sub_heading}}
                    @endif
                </p>

                <p class="heading-latest">
                    Here Some of Our Latest Work
                </p>

                <button class="button">
                    <span>Discover More</span>
                </button>
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: #630D7B">
            <div class="col-md-6">
                <p class="content-heading" style="margin-top: 31px;">
                    @if(isset($AboutUsInfo->content_heading))
                    {{$AboutUsInfo->content_heading}}
                    @endif
                </p>

                <h1 class="content-heading-description">
                    @if(isset($AboutUsInfo->content_description))
                    {!!$AboutUsInfo->content_description!!}
                    @endif
                </h1>
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->content_image))
                <img src="{{ asset('storage/photo/' .$AboutUsInfo->content_image) }}" alt="..." class="img-thumbnail">
                @endif
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: #A80391">
            <div class="col-md-6">
                @if(isset($AboutUsInfo->vision_heading))
                <h1 class="vission_heading">{{$AboutUsInfo->vision_heading}}</h1>
                @endif

                @if(isset($AboutUsInfo->vision_sub_heading))
                <h1 class="vission_sub_heading">{{$AboutUsInfo->vision_sub_heading}}</h1>
                @endif
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->mission_description))
                <blockquote class="vission_description">{!!$AboutUsInfo->mission_description!!}</blockquote>
                @endif
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: #830886">
            <div class="col-md-6">
                @if(isset($AboutUsInfo->mission_heading))
                <h1 class="mission_heading">{{$AboutUsInfo->mission_heading}}</h1>
                @endif

                @if(isset($AboutUsInfo->mission_sub_heading))
                <h1 class="mission_sub_heading">{{$AboutUsInfo->mission_sub_heading}}</h1>
                @endif
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->vision_description))
                <blockquote class="mission_description">{!!$AboutUsInfo->vision_description!!}</blockquote>
                @endif
            </div>
        </div>


        <div class="col-md-12 center" style="background-color: #1E1666">
            <div class="col-md-6">
                @if(isset($AboutUsInfo->value_heading))
                <h1 class="mission_heading">{{$AboutUsInfo->value_heading}}</h1>
                @endif
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->value_description))
                <blockquote class="mission_description">{!!$AboutUsInfo->value_description!!}</blockquote>
                @endif
            </div>
        </div>

        <div class="col-md-12 center" style="background-color: #1E1666">
            <div class="col-md-4 containerss">
                @if(isset($AboutUsInfo->total_client_background_image))
                <img src="{{ asset('storage/photo/' .$AboutUsInfo->total_client_background_image) }}"
                    style=" opacity: 0.5;" alt="..." class="img-thumbnail">
                @endif
                @if(isset($AboutUsInfo->total_client))
                <div class="centered">{{$AboutUsInfo->total_client}}</div>
                @endif
            </div>
            <div class="col-md-4 containerss">
                @if(isset($AboutUsInfo->total_year_background_image))
                <img src="{{ asset('storage/photo/' .$AboutUsInfo->total_year_background_image) }}"
                    style=" opacity: 0.5;" alt="..." class="img-thumbnail">
                @endif
                @if(isset($AboutUsInfo->total_year_record))
                <div class="centered">{{$AboutUsInfo->total_year_record}}</div>
                @endif
            </div>
            <div class="col-md-4 containerss">
                @if(isset($AboutUsInfo->on_time_delivery_caption_backgroung_image))
                <img src="{{ asset('storage/photo/' .$AboutUsInfo->on_time_delivery_caption_backgroung_image) }}"
                    style=" opacity: 0.5;" alt="..." class="img-thumbnail">
                @endif
                @if(isset($AboutUsInfo->on_time_delivery_caption))
                <div class="centered">{{$AboutUsInfo->on_time_delivery_caption}}</div>
                @endif
            </div>
        </div>


        <div class="col-md-12 center" style="background-color: #4E0F75">
            <div class="col-md-6">
                @if(isset($AboutUsInfo->our_value_title))
                <h1 class="mission_heading">{{$AboutUsInfo->our_value_title}}</h1>
                @endif

                @if(isset($AboutUsInfo->our_value_heading))
                <h1 class="mission_sub_heading">{{$AboutUsInfo->our_value_heading}}</h1>
                @endif

                @if(isset($AboutUsInfo->our_value_sub_heading))
                <h1 class="mission_sub_heading">{{$AboutUsInfo->our_value_sub_heading}}</h1>
                @endif

                <button class="button">
                    <span>Discover More</span>
                </button>
            </div>

            <div class="col-md-6">
                @if(isset($AboutUsInfo->vision_description))
                <blockquote class="mission_description">{!!$AboutUsInfo->vision_description!!}</blockquote>
                @endif
            </div>
        </div>


        <div class="col-md-12 center" style="background-color: #730A80">
            <p class="making_marketing">Making Marketing Smarter</p>
        </div>
    </div>
</main>
@endsection
{{-- <script>
    document.querySelector('.button').onmousemove = function (e) {
	var x = e.pageX - e.target.offsetLeft;
	var y = e.pageY - e.target.offsetTop;
	e.target.style.setProperty('--x', x + 'px');
	e.target.style.setProperty('--y', y + 'px');
};
</script> --}}
