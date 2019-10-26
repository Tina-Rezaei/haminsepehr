@extends('UsersViews.base')
@section('heroarea')
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{ $posts[0]['coverImage'] }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <div class="post-cta"><a href="#">travel</a></div>
                        <h3>{{ $posts[0]['title'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <!-- ============= Post Content Area ============= -->
        <div class="col-12 col-lg-8">
            <div class="single-blog-content mb-100">
                <!-- Post Meta -->
                <div class="post-meta">
                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                </div>
                <!-- Post Content -->
                <div class="post-content">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit semper.</h6>
                    <h6>Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</h6>
                    <blockquote class="mb-30">
                        <h6>Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</h6>
                        <div class="post-author">
                            <p>Robert Morgan</p>
                        </div>
                    </blockquote>
                    <h6>Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</h6>
                    <!-- Post Tags -->
                    <ul class="post-tags">
                        <li><a href="#">Manual</a></li>
                        <li><a href="#">Liberty</a></li>
                        <li><a href="#">Recommendations</a></li>
                        <li><a href="#">Interpritation</a></li>
                    </ul>
                    <!-- Post Meta -->
                    <div class="post-meta second-part">
                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========== Sidebar Area ========== -->
        <div class="col-12 col-md-8 col-lg-4">
            <div class="post-sidebar-area mb-100">
                <!-- Widget Area -->
                <div class="sidebar-widget-area">
                    <h5 class="title">About World</h5>
                    <div class="widget-content">
                        <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
                    </div>
                </div>
                <!-- Widget Area -->
                <div class="sidebar-widget-area">
                    <h5 class="title">Top Stories</h5>
                    <div class="widget-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b11.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b13.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b14.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b10.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b12.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget Area -->
                <div class="sidebar-widget-area">
                    <h5 class="title">Stay Connected</h5>
                    <div class="widget-content">
                        <div class="social-area d-flex justify-content-between">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Widget Area -->
                <div class="sidebar-widget-area">
                    <h5 class="title">Today’s Pick</h5>
                    <div class="widget-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post todays-pick">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b22.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content px-0 pb-0">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============== Related Post ============== -->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Single Blog Post -->
            <div class="single-blog-post">
                <!-- Post Thumbnail -->
                <div class="post-thumbnail">
                    <img src="img/blog-img/b1.jpg" alt="">
                    <!-- Catagory -->
                    <div class="post-cta"><a href="#">travel</a></div>
                </div>
                <!-- Post Content -->
                <div class="post-content">
                    <a href="#" class="headline">
                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                    </a>
                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <!-- Single Blog Post -->
            <div class="single-blog-post">
                <!-- Post Thumbnail -->
                <div class="post-thumbnail">
                    <img src="img/blog-img/b2.jpg" alt="">
                    <!-- Catagory -->
                    <div class="post-cta"><a href="#">travel</a></div>
                </div>
                <!-- Post Content -->
                <div class="post-content">
                    <a href="#" class="headline">
                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                    </a>
                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <!-- Single Blog Post -->
            <div class="single-blog-post">
                <!-- Post Thumbnail -->
                <div class="post-thumbnail">
                    <img src="img/blog-img/b7.jpg" alt="">
                    <!-- Catagory -->
                    <div class="post-cta"><a href="#">travel</a></div>
                    <!-- Video Button -->
                    <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                </div>
                <!-- Post Content -->
                <div class="post-content">
                    <a href="#" class="headline">
                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                    </a>
                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                    <!-- Post Meta -->
                    <div class="post-meta">
                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="post-a-comment-area mt-70">
                <h5>Get in Touch</h5>
                <!-- Contact Form -->
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="group">
                                <input type="text" name="name" id="name" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Enter your name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="group">
                                <input type="email" name="email" id="email" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Enter your email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="group">
                                <textarea name="message" id="message" required></textarea>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Enter your comment</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn world-btn">Post comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <!-- Comment Area Start -->
            <div class="comment_area clearfix mt-70">
                <ol>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content">
                            <!-- Comment Meta -->
                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                            </div>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                        </div>
                        <ol class="children">
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                        <a href="#" class="comment-reply btn world-btn">Reply</a>
                                    </div>
                                    <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content">
                            <!-- Comment Meta -->
                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                            </div>
                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                        </div>
                    </li>

                </ol>
            </div>
        </div>
    </div>
@endsection