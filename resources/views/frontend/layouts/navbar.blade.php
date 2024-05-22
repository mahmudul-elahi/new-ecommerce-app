<section class="menu">
    <nav class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <h2 class="menu-title">Main Menu</h2>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">

                    <!-- Home -->
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <!-- / Home -->


                    <!-- New & Featured -->
                    <li>
                        <a href="{{ route('shop') }}">New & Featured</a>
                    </li>
                    <!-- / New & Featured -->


                    <!-- Elements -->
                    <li class="dropdown dropdown-slide">
                        <a href="{{ route('shop') }}" class="dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true"
                            aria-expanded="false">Shop
                            <span class="tf-ion-ios-arrow-down"></span></a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Basic -->
                                <div class="col-lg-6 col-md-6 mb-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Men</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="confirmation.html">Confirmation</a></li>

                                    </ul>
                                </div>

                                <!-- Layout -->
                                <div class="col-lg-6 col-md-6 mb-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Women</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="product-single.html">Product Details</a></li>
                                        <li><a href="shop-sidebar.html">Shop With Sidebar</a></li>
                                    </ul>
                                </div>

                            </div><!-- / .row -->
                        </div><!-- / .dropdown-menu -->
                    </li>
                    <!-- / Elements -->


                    <!-- Contact Us -->
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <!-- / Contact Us -->

                </ul><!-- / .nav .navbar-nav -->

            </div>
            <!--/.navbar-collapse -->
        </div><!-- / .container -->
    </nav>
</section>
