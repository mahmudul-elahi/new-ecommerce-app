<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>0129- 12323-123123</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="{{ route('home') }}">
                        <!-- replace logo here -->
                        <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="AVIATO">
                                        <tspan x="108.94" y="325">AVIATO</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">

                <ul class="top-menu text-right list-inline">

                    {{-- <li class="dropdown search dropdown-slide">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                class="tf-ion-ios-search-strong"></i> Search</a>
                        <ul class="dropdown-menu search-dropdown">
                            <li>
                                <form action="post"><input type="search" class="form-control" placeholder="Search...">
                                </form>
                            </li>
                        </ul>
                    </li> --}}

                    @guest
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>

                        <li>
                            <a href="{{ route('register') }}">Sign Up</a>
                        </li>

                    @endguest



                    @auth
                        @if (auth()->user()->hasRole('admin'))
                            <li>
                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="logout-button" type="submit">Logout</button>
                                </form>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user.cart') }}"><i class="tf-ion-android-cart"></i>Cart</a>
                            </li>

                            <li>
                                <a href="{{ route('user.dashboard') }}">Dashboard</a>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="logout-button" type="submit">Logout</button>
                                </form>
                            </li>
                        @endif
                    @endauth

                </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section>
