@extends('blog.layouts.layout')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1100382813834256&autoLogAppEvents=1" nonce="Ekrie1x0"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=1100382813834256&autoLogAppEvents=1" nonce="LtJDrZrx"></script>


<div class="Marketing-bg">
    <div class="container" style="position: absolute; width:10%; ">
        <div class="pull-left" style="">
            <img src="{{ Storage::disk('local')->url($post->image) }}" alt="cho vui" title="">
        </div>
     </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Marketingheading">
               <h3 style="font-family: 'Times New Roman', Times, serif; text-transform: inherit; padding: 20px 0px;">{{ $post->title }}</h3>
               <p class="" align="center" style="
                border-top: 2px solid #0004ff;
                position: absolute;
                left: 50%;
                bottom: 0;"></p>
               <p style="
                    font-size: 25px;
                    font-family: 'Times New Roman', Times, serif;
                    font-weight: 500;
                    text-align:center;
                    text-transform: inherit;
               ">{{ $post->subtitle }}</p>
            </div>
         </div>
      </div>
   </div>
</div>

      <!-- section -->
 <!-- section -->
 <div class="section layout_padding">
    <div class="container">

       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-10 ">
             <div class="full blog_cont">
                <div style="font-family: Times New Roman, Times, serif;">
                    <small>Created at: {{ $post->created_at->diffForHumans() }}</small>
                    <!-- Categories -->
                    @foreach ($post->categories as $category)
                    <small class="pull-right" style="margin-right: 20px">
                        <a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
                    </small>
                    @endforeach
                    <!-- Body -->
                    {!! htmlspecialchars_decode($post->body) !!}
                    <!-- Tags Clouds-->
                    <h4>Tags Clouds</h4>
                    @foreach ($post->tags as $tag)
                    <a href="{{ route('tag',$tag->slug) }}">
                        <small class="pull-left" style="margin-right: 20px; border-radius: 5px; border: 1px solid gray; padding: 2px 5px">
                            {{ $tag->name }}
                        </small>
                    </a>
                    @endforeach

                </div>
             </div>
          </div>
          <div class="container">
              <div class="full blog_cont center">
                  <div class="fb-like" data-href="{{ Request::url() }}" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
              </div>
              <div class="full blog_cont center ">
                  <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="10"></div>
              </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
    <!-- end section -->

@endsection
