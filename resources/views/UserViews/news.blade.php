@extends('UsersViews.base')
@section('header')
{{--    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--}}
@endsection
@section('heroarea')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style='background-image: url("/vendors/world/img/blog-img/bg2.jpg");'></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url('/vendors/world/img/blog-img/bg1.jpg');"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-12">
            <div class="post-content-area mb-50">
                <div class="world-catagory-area mt-50">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="title">What's Trending</li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Style hunter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab12" data-toggle="tab" href="#world-tab-12" role="tab" aria-controls="world-tab-12" aria-selected="false">Vogue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab13" data-toggle="tab" href="#world-tab-13" role="tab" aria-controls="world-tab-13" aria-selected="false">Health &amp; Fitness</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab14" data-toggle="tab" href="#world-tab-14" role="tab" aria-controls="world-tab-14" aria-selected="false">Travel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab15" data-toggle="tab" href="#world-tab-15" role="tab" aria-controls="world-tab-15" aria-selected="false">Gadgets</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                            <div class="dropdown-menu">
                                <a class="nav-link" id="tab16" data-toggle="tab" href="#world-tab-16" role="tab" aria-controls="world-tab-16" aria-selected="false">Sports</a>
                                <a class="nav-link" id="tab17" data-toggle="tab" href="#world-tab-17" role="tab" aria-controls="world-tab-17" aria-selected="false">Politices</a>
                                <a class="nav-link" id="tab18" data-toggle="tab" href="#world-tab-18" role="tab" aria-controls="world-tab-18" aria-selected="false">Features</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    @foreach($posts as $post)
                                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig justify-content-end" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">

                                            <div class="post-content">
                                                <a href="{{route('singleblog',$post['id'])}}" class="headline">
                                                    <h5 style="text-transform: capitalize">{{ $post['title'] }}</h5>
                                                </a>
                                                <p>{!!   $post['body'] !!}</p>
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">{{ $post->user->name }}</a> on <a href="#" class="post-date">{{ jDate::forge($post['created_at'])->format('%B %d، %Y') }}</a></p>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail ">
                                                <div style="background-image: url({{ $post['thumbnailImage'] }});width: 100%;padding-bottom: 100%;background-size:100% 100%;background-position: center;">
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="world-latest-articles">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="title">
                    <h5>Latest Articles</h5>
                </div>
                @foreach($posts as $post)
                    <div class=" single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig justify-content-end" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUpBig;">
                        <div>
                            <a href="{{ route('addfavorite',$post['id']) }}" ><span class="glyphicon glyphicon-star-empty"></span></a>
                        </div>
                        <div class="post-content">
                            <a href="{{route('singleblog',$post['id'])}}" class="headline">
                                <h5 style="text-transform: capitalize">{{ $post['title'] }}</h5>
                            </a>
                            <p>{!!   $post['body'] !!}</p>
                            <div class="post-meta">
                                <p><a href="#" class="post-author">{{ $post->user->name }}</a> on <a href="#" class="post-date">{{ jDate::forge($post['created_at'])->format('%B %d، %Y') }}</a></p>
                            </div>
                        </div>
                        <div class="post-thumbnail ">
                            <div style="background-image: url({{ $post['thumbnailImage'] }});width: 100%;padding-bottom: 100%;background-size:100% 100%;background-position: center;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection





