      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="{{ route('home') }}"><img src="{{ asset('user/images/lonewolf__footer_logo.png') }}" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="{{ asset('user/images/location_icon.png') }}" alt="#" /></span><span class="text_cont">Tịnh Long<br>Quảng Ngãi</span></li>
                     <li><span><img src="{{ asset('user/images/phone_icon.png') }}" alt="#" /></span><span class="text_cont">038 966 5004<br>038 966 5004</span></li>
                     <li><span><img src="{{ asset('user/images/mail_icon.png') }}" alt="#" /></span><span class="text_cont">thanhsangnguyen400@gmail.com<br>18000565.sang@student.iuh.edu.vn</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="https://facebook.com/LoneWolf1604"><i class="fab fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>

                         <li><a class="dropdown-item col-lg-8" href="{{ route('home') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Trang Chủ</a></li>
                         <li><a class="dropdown-item col-lg-8" href="{{ route('danh-muc') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Danh Mục</a></li>
                         <li><a class="dropdown-item col-lg-8" href="{{ route('ve-blog') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Về Blog</a></li>
                         <li><a class="dropdown-item col-lg-8" href="{{ route('lien-he') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Liên Hệ</a></li>

                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ __('Đăng Nhập') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ __('Đăng Ký   ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">

                                <a class="dropdown-item col-lg-8" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    {{ __('Đăng Xuất') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </li>
                        @endguest

                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="{{ asset('user/images/footer_blog.png') }}" alt="#" /></li>
                        <li><img class="img-responsive" src="{{ asset('user/images/footer_blog.png') }}" alt="#" /></li>
                        <li><img class="img-responsive" src="{{ asset('user/images/footer_blog.png') }}" alt="#" /></li>
                        <li><img class="img-responsive" src="{{ asset('user/images/footer_blog.png') }}" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021-{{ Carbon\carbon::now()->year }} by <a href="https://fb.com/LoneWolf1604">LoneWolf1604</a></strong></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->


<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>


