      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="{{ asset('home') }}"><img src="{{ asset('user/images/lonewolf_logo.png') }}" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              @if (Request::is('trang-chu'))
                                <li class="active">
                                    <a href="trang-chu">Trang Chủ</a>
                                </li>
                              @elseif (Request::is('/'))
                                <li class="active">
                                    <a href="{{ route('home') }}">Trang Chủ</a>
                                </li>
                              @else
                                <li>
                                <a href="{{ route('home') }}">Trang Chủ</a>
                                </li>
                              @endif

                              @if (Request::is('danh-muc'))
                              <li class="active">
                                  <a href="{{ route('danh-muc') }}">Danh Mục</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('danh-muc') }}">Danh Mục</a>
                                </li>
                                @endif

                                @if (Request::is('ve-blog'))
                                <li class="active">
                                   <a href="{{ route('ve-blog') }}">Về Blog</a>
                                </li>
                                @else
                                <li>
                                   <a href="{{ route('ve-blog') }}">Về Blog</a>
                                </li>
                                @endif

                              <!--
                              @if (Request::is('blog'))
                              <li class="active">
                                 <a href="{{ route('home') }}">Blog</a>
                              </li>
                              @else
                              <li>
                                 <a href="{{ route('home') }}">Blog</a>
                              </li>
                              @endif
                                -->
                              @if (Request::is('lien-he'))
                              <li class="active">
                                <a href="{{ route('lien-he') }}">Liên Hệ</a>
                              </li>
                              @else
                              <li>
                                <a href="{{ route('lien-he') }}">Liên Hệ</a>
                              </li>
                              @endif

                              <!-- Login & Register -->
                              @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng Ký   ') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul class="nav nav-treeview" style="margin-top: -40px">
                                            <li class="nav-item">
                                                <div class="" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                              <!-- /Login & Register -->
                              <li class="nav-item">
                                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                  <i class="fas fa-search"></i>
                                </a>

                                <div class="navbar-search-block">
                                    <form class="form-inline">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                              </li>

                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
