@extends('portfolio.nav')

@php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
@endphp

@section('portfolio-details')
    @if (!$agent->isMobile())
        {{-- Desktop Version --}}
        <h1 class="p-3 text-center my-auto" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 3.5rem;">{{ $portfolio->project_name }}</h1>
        <div class="d-flex justify-content-center pt-3">
            <a href="{{ url('/') }}" class="text-decoration-none text-dark"><p class="mb-0 pl-3 py-3" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.2rem;">Home</p></a>
            <p class="mb-0 pl-2 py-3" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.2rem;">/</p>
            <p class="mb-0 pl-2 py-3 text-secondary" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.2rem;">Portfolio Details</p>
        </div>
    @elseif ($agent->isMobile())
        {{-- Mobile Version --}}
        <h1 class="p-3 text-center my-auto" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.1rem;">{{ $portfolio->project_name }}</h1>
        <div class="d-flex justify-content-center pt-3">
            <a href="{{ url('/') }}" class="text-decoration-none text-dark"><p class="mb-0 pl-3 py-3" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.1rem;">Home</p></a>
            <p class="mb-0 pl-2 py-3" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.1rem;">/</p>
            <p class="mb-0 pl-2 py-3 text-secondary" style="font-family:'Fredoka', sans-serif; font-weight:400; font-size: 1.1rem;">Portfolio Details</p>
        </div>
    @endif
    
@endsection

@section('portfolio-content')
    @if (!$agent->isMobile())
        {{-- Desktop Version --}}
        <div class="row">
            <div class="col-xl-8 col-sm-12" style="margin-bottom: 2rem;">
                <div id="carouselIndicator" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselIndicator" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicator" data-slide-to="1"></li>
                        <li data-target="#carouselIndicator" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img1) }}" alt="First slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img2) }}" alt="Second slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img3) }}" alt="Third slide"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicator" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    
                    <a class="carousel-control-next" href="#carouselIndicator" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title ml-3 my-2 font-weight-bold">Project Information</h2>
                        <hr style="margin-left: 0.9rem; margin-right: 0.9rem;">
                        <p class="mb-0 px-3 pt-3 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Category&nbsp;:&nbsp;</strong>{{ $portfolio->project_category }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Front-End&nbsp;:&nbsp;</strong>{{ $portfolio->front_end }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Back-End&nbsp;:&nbsp;</strong>{{ $portfolio->back_end }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Project URL&nbsp;:&nbsp;</strong></p>

                        @if ($portfolio->github_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->github_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->github_url }}</p></a>
                                </div>
                            </div>
                        @endif

                        @if ($portfolio->yt_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-rounded/24/000000/youtube-play.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-rounded/24/000000/youtube-play.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->yt_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->yt_url }}</p></a>
                                </div>
                            </div>
                        @endif

                        @if ($portfolio->website_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/domain.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/domain.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->website_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->website_url }}</p></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <h2 class="p-3 mt-3" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.3rem;">Details</h2>
                <p class="px-3 pt-0 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">
                    {{ $portfolio->project_details }}
                </p>
            </div>
        </div>
    @elseif ($agent->isMobile())
        {{-- Mobile Version --}}
        <div class="row">
            <div class="col-xl-8 col-sm-12" style="margin-bottom: 2rem;">
                <div id="carouselIndicator" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselIndicator" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicator" data-slide-to="1"></li>
                        <li data-target="#carouselIndicator" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img1) }}" alt="First slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img2) }}" alt="Second slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 h-100" src="{{ asset($portfolio->img3) }}" alt="Third slide"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicator" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    
                    <a class="carousel-control-next" href="#carouselIndicator" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title ml-3 my-2 font-weight-bold">Project Information</h2>
                        <hr style="margin-left: 0.9rem; margin-right: 0.9rem;">
                        <p class="mb-0 px-3 pt-3 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Category&nbsp;:&nbsp;</strong>{{ $portfolio->project_category }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Front-End&nbsp;:&nbsp;</strong>{{ $portfolio->front_end }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Back-End&nbsp;:&nbsp;</strong>{{ $portfolio->back_end }}</p>
                        <p class="mb-0 px-3 py-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;"><strong>Project URL&nbsp;:&nbsp;</strong></p>
                        
                        @if ($portfolio->github_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/ios-glyphs/24/000000/github.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->github_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->github_url }}</p></a>
                                </div>
                            </div>
                        @endif

                        @if ($portfolio->yt_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-rounded/24/000000/youtube-play.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-rounded/24/000000/youtube-play.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->yt_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->yt_url }}</p></a>
                                </div>
                            </div>
                        @endif

                        @if ($portfolio->website_url == null)
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/domain.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">N/A</p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-2 m-0 pt-1 pl-3 text-center">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/domain.png"/>
                                </div>
                                <div class="col-10 m-0 p-0">
                                    <a href="{{ $portfolio->website_url }}"><p class="mb-0 pr-3 pt-1 pb-2" style="font-family:'Fredoka', sans-serif;font-size: 1rem;">{{ $portfolio->website_url }}</p></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <h2 class="p-3 mt-3" style="font-family: 'Fredoka', sans-serif; font-weight:600; font-size: 2.1rem;">Details</h2>
                <p class="px-3 pt-0 mb-0" style="font-weight: 100; font-family:'Work Sans', sans-serif; font-size: 1rem;">
                    {{ $portfolio->project_details }}
                </p>
            </div>
        </div>
    @endif
@endsection