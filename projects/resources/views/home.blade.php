@extends('environment.master')
@section('css')
    <style>
        body {
            /* Created with https://www.css-gradient.com */
            background: #23EC55;
            background: -webkit-radial-gradient(top right, #23EC55, #2D51C1);
            background: -moz-radial-gradient(top right, #23EC55, #2D51C1);
            background: radial-gradient(to bottom left, #23EC55, #2D51C1);
        }

        .wrapper {
            margin: 10vh;
        }

        .card {
            border: none;
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
            overflow: hidden;
            border-radius: 20px;
            min-height: 450px;
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 768px) {
            .card {
                min-height: 350px;
            }
        }
        @media (max-width: 420px) {
            .card {
                min-height: 300px;
            }
        }
        .card.card-has-bg {
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
            background-size: 120%;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .card.card-has-bg:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            -webkit-filter: grayscale(1);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: grayscale(100%);
        }
        .card.card-has-bg:hover {
            transform: scale(0.98);
            box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
            background-size: 130%;
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card.card-has-bg:hover .card-img-overlay {
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
            background: #234f6d;
            background: linear-gradient(0deg, rgba(4, 69, 114, 0.5) 0%, #044572 100%);
        }
        .card .card-footer {
            background: none;
            border-top: none;
        }
        .card .card-footer .media img {
            border: solid 3px rgba(255, 255, 255, 0.3);
        }
        .card .card-meta {
            color: #26BD75;
        }
        .card .card-body {
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card:hover {
            cursor: pointer;
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card:hover .card-body {
            margin-top: 30px;
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card .card-img-overlay {
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
            background: #234f6d;
            background: linear-gradient(0deg, rgba(35, 79, 109, 0.3785889356) 0%, #455f71 100%);
        }
    </style>
@endsection
@section('content')<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <h1 class="display-4">Bootstrap 4 Cards With Background Image</h1>
                <p class="lead">Lorem ipsum dolor sit amet at enim hac integer volutpat maecenas pulvinar. </p>
            </div>
        </div>
        <div class="row">
            @foreach($campaigns as $campaign)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">{{ $campaign->name ?? "" }}</small>
                            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                            <small><i class="far fa-clock"></i> Başlangıç: {{ $campaign->start_date ? date_format(date_create($campaign->start_date),'d/m/Y') : 0 }}</small>
                            <small><i class="far fa-clock"></i> Bitiş: {{ $campaign->end_date ? date_format(date_create($campaign->end_date),'d/m/Y')  : 0 }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
