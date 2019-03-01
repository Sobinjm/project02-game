 <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a>
            </li>
            <li><a href="/events">Events</a>
            </li>
          {{-- <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Store <span class="caret"></span> <span class="label">games</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="store-1.html">Store Style 1</a>
                </li>
                <li><a href="store-2.html">Store Style 2</a>
                </li>
                <li><a href="cart.html">Cart</a>
                </li>
              </ul>
              <ul role="menu">
                <li><a href="store-product-1.html">Product Style 1</a>
                </li>
                <li><a href="store-product-2.html">Product Style 2</a>
                </li>
                <li><a href="checkout.html">Checkout</a>
                </li>
              </ul>
            </div>
          </li> --}}
         
        </ul>


        @guest
                            <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown dropdown-hover">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                          </ul>
                            @if (Route::has('register'))
                             <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown dropdown-hoverm">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                              </ul>
                            @endif
                        @else

                         <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->username }}
                    <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label"> it is you </span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                </li>
                <!-- <li><a href="http://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK">Purchase</a> -->
                </li>
                <li class="divider"></li>

                <li><a href="/profile">Profile <span class="badge pull-right bg-warning">13</span></a>
                </li>
              
                <li class="divider"></li>

                <li><a href="{{ route('logout') }}">LogOut</a>
                </li>
                
              </ul>

                          
                        @endguest




     
            </div>
          </li>
         

        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
