@extends('layouts.ecommerce')
@section('content')
<style>
    * {
        box-sizing: border-box;
    }

    /* Add a gray background color with some padding */
    body {
        font-family: Arial;
        background: #f1f1f1;
    }

    /* Header/Blog Title */
    .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Footer */
    .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {

        .leftcolumn,
        .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }
</style>
<main class="main about">
    <div class="page-header page-header-bg text-left">
        <div class="row" style="padding:20px;">
            <div class="leftcolumn">
                @foreach($allblogs as $allblog)
                    <div class="card">
                        <h2>{{$allblog->title}}</h2>
                        <h5 style="font-size: 20px;">Posted at {{$allblog->created_at->format('d M Y') }}</h5>
                        <img class="fakeimg" src="{{ asset('storage/photo/'.$allblog->image) }}">
                        <p>{{$allblog->sub_title}}</p>
                        <p>{!!$allblog->description!!}</p>
                    </div>
                @endforeach
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>About Me</h2>
                    <div class="fakeimg" style="height:100px;">Image</div>
                    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                </div>
                <div class="card">
                        <h3>Popular Post</h3>
                        @foreach($allblogs as $allblog)
                        <img class="fakeimg" src="{{ asset('storage/photo/'.$allblog->image) }}"><br/>
                         
                        @endforeach
                </div>
                <div class="card">
                    <h3>Follow Me</h3>
                    <p>Some text..</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
