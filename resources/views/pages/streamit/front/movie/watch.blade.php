@extends('layouts.streamit.front.master')
@section('content')



    <!-- Banner Start -->
    @if(empty($movies->videos->path_url) && !empty($movies->videos->code))
        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
        </div>
    @else
        <div class="video-container iq-main-slider">
            <video class="video d-block" controls loop>
                <source src="video/sample-video.mp4" type="video/mp4">
            </video>
        </div>
    @endif
    <!-- Banner End -->
    <!-- MainContent -->
    <div class="main-content movi">
        <section class="movie-detail container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-info g-border">
                        <h1 class="trending-text big-title text-uppercase mt-0">{{$movies->name}}</h1>
                        <ul class="p-0 list-inline d-flex align-items-center movie-content">
                            <li class="text-white">Action</li>
                            <li class="text-white">Drama</li>
                            <li class="text-white">Thriller</li>
                        </ul>
                        <div class="d-flex align-items-center text-white text-detail">
                            <span class="badge badge-secondary p-3">{{$movies->age_group}}</span>
                            <span class="ml-3">{{$movies->duration}}</span>
                            <span class="trending-year">2020</span>
                        </div>
                        <div class="d-flex align-items-center series mb-4">
                            <a href="javascript:void();"><img src="images/trending/trending-label.png" class="img-fluid"
                                                              alt=""></a>
                            <span class="text-gold ml-3">#2 in Series Today</span>
                        </div>
                        <p class="trending-dec w-100 mb-0">{{$movies->desc}}</p>
                        <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                            <li><span><i class="ri-add-line"></i></span></li>
                            <li><span><i class="ri-heart-fill"></i></span></li>
                            <li class="share">
                                <span><i class="ri-share-fill"></i></span>
                                <div class="share-box">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="iq-favorites" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">More Like This</h4>
                            <a href="movie-category.html" class="text-primary">View all</a>
                        </div>
                        <div class="favorites-contens">
                            <ul class="list-inline favorites-slider row p-0 mb-0">
                                @foreach($similars as $movie)
                                <li class="slide-item">
                                    <a href="{{url(env('MOVIE').'s/'.$movie->name)}}">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="{{$movie->banner}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>{{$movie->name}}</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">{{$movie->age_group}}</div>
                                                    <span class="text-white">{{$movie->duration}}</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play
                                          Now</span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="iq-upcoming-movie">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Upcoming Movies</h4>
                            <a href="movie-category.html" class="text-primary">View all</a>
                        </div>
                        <div class="upcoming-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($upcoming as $movie)
                                <li class="slide-item">
                                    <a href="{{url(env('MOVIE').'s/'.$movie->name)}}">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="{{$movie->banner}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>{{$movie->name}}</h6>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <div class="badge badge-secondary p-1 mr-2">{{$movie->age_group}}</div>
                                                    <span class="text-white">{{$movie->duration}}</span>
                                                </div>
                                                <div class="hover-buttons">
                                       <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                       </span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                                <ul class="list-inline p-0 m-0 music-play-lists">
                                                    <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                                    <li><span><i class="ri-heart-fill"></i></span></li>
                                                    <li><span><i class="ri-add-line"></i></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>





@endsection