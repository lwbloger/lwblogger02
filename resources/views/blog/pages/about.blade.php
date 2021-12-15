@extends('blog.layouts.layout')

@section('content')

    <div class="About-bg">
    <div class="container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="row">
            <div class="col-md-12">
                <div class="aboutheading">
                <h3>Về <span class="orange_color">Web Blog</span> của tôi!</h3>
                </div>
            </div>
        </div>
    </div>
    </div>



      <div class="section layout_padding">
         <div class="container">

            <div class="row">
               <div class="col-md-6">
                  <img src="{{ asset('images/cui_chao_02.jpg') }}" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Chào tất cả mọi người!</h4>
                     <h5>Ngày 07/12/2021</h5>
                     <p>Chào tất cả mọi người!
                         <br>Tôi là Lone Wolf, quản trị viên của trang Web Blog <strong>LWBlogger</strong>.
                         <br>Cảm ơn mọi người đã đến với Blog của tôi!
                         <br>Blog này được tôi tạo ra với mục đích chính là viết một vài câu chuyện
                         của tôi trong cuộc sống, chia sẽ mẹo vặt, cũng như viết truyện, v.v (có thể
                         hiểu là có gì viết nấy, bất chấp mọi thể loại cũng được :v ) bằng tất cả tâm
                         huyết cũng như sự nhiệt huyết của tôi.
                         <br>Vì Web Blog này mới được phát triển trong đầu tháng này, nên khó tránh
                         khỏi việc gặp phải nhiều lỗi không mong muốn. Trong quá trình sử dụng, nếu gặp
                         vấn đề gì không được hài lòng lắm, tôi mong các bạn sẽ đóng góp thêm ý kiến để
                         Web Blog này ngày càng được hoàn thiện.
                         <br>Web Blog này sẽ được tôi phát triển thêm từng ngày để có thể đáp ứng được
                         nhiều nhất những nguyện vọng của các bạn.
                         <br>Và cuối cùng, cảm ơn mọi người đã quan tâm đến Web Blog của tôi!
                     </p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="{{ asset('user/images/blog2.png') }}" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>What 3 years of android taught me the hard way</h4>
                     <h5>MAY 19 2019  5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
               </div>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="{{ asset('user/images/blog1.png') }}" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>The biggest and most awesome camera  of  year</h4>
                     <h5>MAY 14 2019 5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="{{ asset('user/images/blog2.png') }}" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>What 3 years of android taught me the hard way</h4>
                     <h5>MAY 19 2019  5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
               </div>
            </div>








            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{ asset('/about') }}">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
@endsection
