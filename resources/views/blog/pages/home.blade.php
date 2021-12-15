@extends('blog.layouts.layout')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .like:hover{
            color: rgb(0, 255, 34);
        }
        .fa-heart-broken:hover{
            color: rgb(0, 255, 34);
        }

        .fa-heart-broken:hover{
            color: red;
        }
        .dislike:hover{
            color: red;
        }
    </style>
@endsection
@section('content')
<!--For FB comment top -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1100382813834256&autoLogAppEvents=1" nonce="Ekrie1x0"></script>
<!-- /For FB comment top -->
<!-- For FB Like top -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=1100382813834256&autoLogAppEvents=1" nonce="75YoP72e"></script>
<!-- For FB Like top -->

<!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                    <!--Dẫn đến trang blog khác, có thể dùng php để show và dẫn đến link blog khác-->
                     <div class="carousel-inner">
                        @foreach ($post1 as $post)
                            <div class="carousel-item active">
                                <a href="{{ route('post',$post->slug) }}">
                                    <img src="{{ Storage::disk('local')->url($post->image) }}" alt="#" />
                                </a>
                            </div>
                        @endforeach
                        @foreach ($posts as $post)
                            <div class="carousel-item">
                                <a href="{{ route('post',$post->slug) }}">
                                    <img src="{{ Storage::disk('local')->url($post->image) }}" alt="{{ $post->subtitle }}" />
                                </a>
                            </div>
                        @endforeach
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section" style="font-family: 'Times New Roman', Times, serif">
                     <h4>Chào mừng đến với </h4><br>
                     <h3>LoneWolf Blogger</h3>
                     <p style="color: black"><strong>Website</strong> này được tạo vào {{ $post->created_at }} <br>
                     Tôi đang <strong>cố gắng</strong> để phát triển Website này ngày một hoàn thiện hơn.
                     <br>
                     Vì một <strong>Web Blog</strong> chất lượng, hãy đóng góp cho tôi thật nhiều ý kiến!
                     <br>
                     <strong>Cảm ơn</strong> các bạn đã theo dõi Web Blog của tôi!</p>
                     <div class="button_section">
                        <a href="{{ route('lien-he') }}">Giới thiệu</a>
                        <a href="https://fb.com/LoneWolf1604">Liên Hệ</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->

      <!-- section -->
      <div class="section layout_padding" id="app">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h3>Blog<span class="orange_color">s</span></h3>
                  </div>
               </div>
            </div>
            @foreach ($posts as $post)
                <div class="row" style="padding-bottom: 15px; font-family: 'Times New Roman', Times, serif;">
                    <div class="col-md-6">
                        <a href="{{ route('post',$post->slug) }}"><img src="{{ Storage::disk('local')->url($post->image) }}" alt="Another Picture" class="img-fluid"></a>
                    </div>
                    <div class="col-md-6" style="height: 300px; overflow: hidden">
                        <div class="full blog_cont">
                            <a href="{{ route('post',$post->slug) }}"><h4>{{ $post->title }}</h4></a>
                            <a href="{{ route('post',$post->slug) }}"><h4>{{ $post->subtitle }}</h4></a>
                            <h5>Posted by <a href="">Lone Wolf</a>
                                 at {{ $post->created_at->diffForHumans() }}
                                <!--
                                 <a href="" class="like">
                                    <small style="font-size: 17px">0</small>
                                    <i class="fab fa-gratipay"></i>
                                </a>
                                 <a href="" class="dislike">
                                    <small style="font-size: 17px">0</small>
                                    <i class="fas fa-heart-broken"></i>
                                </a>
                                <div class="fb-like" data-href="{{ route('post',$post->slug) }}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                                -->
                            </h5>
                            <p>{!! htmlspecialchars_decode($post->body) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <ul class="pager pull-right" style="padding:29px 0px; height: 100px; overflow:hidden;">
                <li class="next">
                    {{ $posts->links() }}
                </li>
            </ul>
         </div>
      </div>
      <!-- end section -->


      <!-- section -->
      <!-- For FB comment bottom -->
      <section class="layout_padding">
         <div class="container">
            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="10"></div>
            <!--
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comments / 2</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="{{ asset('user/images/c_1.png') }}" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>Veniam</h3>
                              <h4>Posted on Jan 10 / 2017 at 06:53 am</h4>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                 dolore magna aliquam erat volutpat.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="{{ asset('user/images/c_2.png') }}" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>Jack</h3>
                              <h4>Posted on Jan 10 / 2017 at 06:53 am</h4>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                 dolore magna aliquam erat volutpat.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Reply</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Post : Your Comment</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.html">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" required="#" />
                                    <input type="email" name="email" placeholder="Email" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Send</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
        -->
         </div>
      </section>
      <!-- For FB comment bottom -->
      <!-- end section -->

@endsection
@section('import_js')
      <script src="{{ asset('js/app.js') }}"></script>
@endsection
