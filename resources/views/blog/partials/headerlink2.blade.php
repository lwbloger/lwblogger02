<!--
                              @if (Request::is('about'))
                              <li class="active">
                                 <a href="{{ route('about') }}">About</a>
                              </li>
                              @else
                              <li>
                                 <a href="{{ route('about') }}">About</a>
                              </li>
                              @endif
                            -->

                            @if (Request::is('post'))
                            <li class="active">
                               <a href="{{ route('post') }}">Marketing</a>
                            </li>
                            @else
                            <li>
                               <a href="{{ route('post') }}">Marketing</a>
                            </li>
                            @endif
                          <!--
                            @if (Request::is('blog'))
                            <li class="active">
                               <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            @else
                            <li>
                               <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            @endif

                            @if (Request::is('contact'))
                            <li class="active">
                              <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            @else
                            <li>
                              <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            @endif
                          -->
                            <!--Start login form--
                            @guest
                               @if (Route::has('login'))
                                  <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                               @endif

                               @if (Route::has('register'))
                                  <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                               @endif
                            @else
                               <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            @endguest
                            !--End login form-->

                          <!--
                            @if (Request::is('login'))
                            <li class="active">
                              <a href="{{ route('login') }}">Login</a>
                            </li>
                            @else
                            <li>
                              <a href="{{ route('login') }}">Login</a>
                            </li>
                            @endif

                            @if (Request::is('register'))
                            <li class="active">
                              <a href="{{ route('register') }}">Register</a>
                            </li>
                            @else
                            <li>
                              <a href="{{ route('register') }}">Register</a>
                            </li>
                            @endif


                            @if (Request::is('search'))
                            <li class="active">
                               <a href="#"><img src="{{ asset('user/images/search_icon.png') }}" alt="#" /></a>
                            </li>
                            @else
                            <li>
                               <a href="#"><img src="{{ asset('user/images/search_icon.png') }}" alt="#" /></a>
                            </li>
                            @endif
                          -->
