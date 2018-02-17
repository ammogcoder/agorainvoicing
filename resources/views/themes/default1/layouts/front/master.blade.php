<?php $setting = \App\Model\Common\Setting::where('id', 1)->first(); ?>
<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        <!-- Basic -->
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>
            @yield('title')
        </title>    

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="dist/img/faveo.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="dist/img/faveo.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">


        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/simple-line-icons/css/simple-line-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.min.css')}}">


        <!-- Theme CSS -->
     <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{asset('css/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('css/rs-plugin/css/layers.css')}}">
        <link rel="stylesheet" href="{{asset('css/rs-plugin/css/navigation.css')}}">
        <link rel="stylesheet" href="{{asset('css/nivo-slider/nivo-slider.css')}}">
        <link rel="stylesheet" href="{{asset('css/nivo-slider/default/default.css')}}">

      
        <link rel="stylesheet" href="{{asset('css/demos/demo-construction.css')}}">

        <!-- Skin CSS -->
       <link rel="stylesheet" href="{{asset('css/skins/default.css')}}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

       


        <!-- Head Libs -->
        <script src="{{asset('css/modernizr/modernizr.min.js')}}"></script>

    </head>
    <body>

        <?php
        $domain = [];
        $set = new \App\Model\Common\Setting();
        $set = $set->findOrFail(1);
        ?>
        <div class="body">
            <header id="header"  data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
                <div class="header-body" style="padding-bottom: 30px;">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="{{url('home')}}">
                                        <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{asset('cart/img/logo/'.$setting->logo)}}">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-search hidden-xs">
                                        {!! Form::open(['url'=>'page/search','method'=>'get']) !!}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    <!--                                    <nav class="header-nav-top">
                                                                            <ul class="nav nav-pills">
                                                                                <li class="hidden-xs">
                                                                                    <a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
                                                                                </li>
                                                                                <li class="hidden-xs">
                                                                                    <a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
                                                                                </li>
                                                                            </ul>
                                                                        </nav>-->
                                </div>
                                <div class="header-row">
                                    <div class="header-nav">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <ul class="header-social-icons social-icons hidden-xs">
                                            <?php
                                            $social = App\Model\Common\SocialMedia::get();
                                            ?>
                                            @foreach($social as $media)
                                            <li class="{{$media->class}}"><a href="{{$media->link}}" target="_blank" title="{{ucfirst($media->name)}}"><i class="{{$media->fa_class}}"></i></a></li>
                                            @endforeach
                                        </ul>
                                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown">
                                                        <a  href="{{url('home')}}">
                                                            pricing
                                                        </a>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a  href="{{url('contact-us')}}">
                                                            contact us
                                                        </a>

                                                    </li>

                                                    <?php $pages = \App\Model\Front\FrontendPage::where('publish', 1)->where('hidden','!=',1)->get(); ?>
                                                    @foreach($pages as $page)
                                                    <li class="dropdown">

                                                        @if($page->parent_page_id==0)
                                                        <?php
                                                        $ifdrop = \App\Model\Front\FrontendPage::where('publish', 1)->where('parent_page_id', $page->id)->count();
                                                        if ($ifdrop > 0) {
                                                            $class = 'dropdown-toggle';
                                                        } else {
                                                            $class = '';
                                                        }
                                                        ?>
                                                        <a class="{{$class}}" href="{{$page->url}}">
                                                            {{ucfirst($page->name)}}
                                                        </a>
                                                        @endif
                                                        @if(\App\Model\Front\FrontendPage::where('publish',1)->where('parent_page_id',$page->id)->count()>0)


                                                        <?php $childs = \App\Model\Front\FrontendPage::where('publish', 1)->where('parent_page_id', $page->id)->get(); // dd($childs); ?>
                                                        <ul class="dropdown-menu">

                                                            @foreach($childs as $child)
                                                            <li>
                                                                <a href="{{$child->url}}">
                                                                    {{ucfirst($child->name)}}
                                                                </a>
                                                            </li>

                                                            @endforeach 




                                                        </ul>
                                                        @endif

                                                    </li>
                                                    @endforeach



                                                    @if(!Auth::user())
                                                    <li class="dropdown">
                                                        <a  href="{{url('auth/login')}}">
                                                            Login
                                                        </a>
                                                    </li>

                                                    @else 
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" href="#">
                                                            {{Auth::user()->first_name}}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            @if(Auth::user()->role=='admin')
                                                            <li><a href="{{url('/')}}">My Account</a></li>
                                                            @else 
                                                            <li><a href="{{url('my-invoices')}}">My Account</a></li>
                                                            @endif
                                                            <li><a href="{{url('auth/logout')}}">Logout</a></li>
                                                        </ul>
                                                    </li>
                                                    @endif

                                                    <li class="dropdown dropdown-mega dropdown-mega-shop" id="headerShop">
                                                        <a class="dropdown-toggle" href="{{url('show/cart')}}">
                                                            <i class="fa fa-user"></i> Cart ({{Cart::getTotalQuantity()}})
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <div class="dropdown-mega-content">
                                                                    <table class="cart">
                                                                        <tbody>
                                                                            @forelse(Cart::getContent() as $key=>$item)
                                                                            <?php
                                                                            $product = App\Model\Product\Product::where('id', $item->id)->first();
                                                                            if ($product->require_domain == 1) {
                                                                                $domain[$key] = $item->id;
                                                                            }
                                                                            $cart_controller = new \App\Http\Controllers\Front\CartController();
                                                                            $currency = $cart_controller->currency();
                                                                            ?>
                                                                            <tr>

                                                                                <td class="product-thumbnail">
                                                                                    <img width="100" height="100" alt="{{$product->name}}" class="img-responsive" src="{{$product->image}}">
                                                                                </td>

                                                                                <td class="product-name">
                                                                                        
                                                                                    <a>{{$item->name}}<br><span class="amount"><strong><small>{{$currency}}</small> {{App\Http\Controllers\Front\CartController::rounding($item->getPriceSumWithConditions())}}</strong></span></a>
                                                                                </td>

                                                                                <td class="product-actions">
                                                                                    <a title="Remove this item" class="remove" href="#" onclick="removeItem('{{$item->id}}');">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </a>
                                                                                </td>

                                                                            </tr>
                                                                            @empty 

                                                                            <tr>
                                                                                <td><a href="{{url('home')}}">Choose a Product</a></td>
                                                                            </tr>


                                                                            @endforelse


                                                                            @if(!Cart::isEmpty())
                                                                            <tr>
                                                                                <td class="actions" colspan="6">
                                                                                    <div class="actions-continue">
                                                                                        <a href="{{url('show/cart')}}"><button class="btn btn-default pull-left">View Cart</button></a>


                                                                                        @if(count($domain)>0)
                                                                                        <a href="#domain" data-toggle="modal" data-target="#domain"><button class="btn btn-primary pull-right">Proceed to Checkout</button></a>
                                                                                        @else
                                                                                        <a href="{{url('checkout')}}"><button class="btn btn-primary pull-right">Proceed to Checkout</button></a>
                                                                                        @endif
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>


                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class=@yield('main-class')>

                    <section class="section-tertiary" style="height: 76px;background-color:#E9EFF2 !important">
                    <div class="container">
                       <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb" style="background-color:#E9EFF2 ;margin-top: 15px;">
                                    @yield('breadcrumb')
                                    <!--<li><a href="#">Home</a></li>
                                    <li class="active">Pages</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1>@yield('page-heading')</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container">

                    <!--<div class="row">
                        <div class="col-md-12">

                            <div class="featured-boxes">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-md-offset-3">
                                        <div class="featured-box featured-box-primary align-left mt-xlg">
                                            <div class="box-content">
                                                <h4 class="heading-primary text-uppercase mb-md">I'm a Returning Customer</h4>
                                                <form action="/" id="frmSignIn" method="post">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label>Username or E-mail Address</label>
                                                                <input type="text" value="" class="form-control input-lg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <a class="pull-right" href="forgot.html">(Forgot Password?)</a>
                                                                <label>Forgot Password</label>
                                                                <input type="password" value="" class="form-control input-lg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="remember-box checkbox">
                                                                <label for="rememberme">
                                                                    <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>-->
                    @if(Session::has('warning'))
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('warning')}}
                    </div>
                    @endif
                    @include('themes.default1.front.domain')
                    @yield('content')

                </div>

            </div>

            <footer id="footer" style="margin-top:35px;">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribbon" style="background-color:#E9EFF2 !important">
                            <span>Get in Touch</span>
                        </div>
                        <div class="col-md-3">
                            <div class="newsletter">
                                <h4>Newsletter</h4>
                                <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                                <div class="alert alert-success hidden" id="newsletterSuccess">
                                    <strong>Success!</strong> You've been added to our email list.
                                </div>

                                <div class="alert alert-danger hidden" id="newsletterError"></div>

                                {!! Form::open(['url'=>'mail-chimp/subcribe','method'=>'GET']) !!}
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" name="email" id="newsletterEmail" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                    </span>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Latest Tweets</h4>
                            <div id="tweets" class="twitter">

                            </div>
                        </div>
                        <?php $widgets = \App\Model\Front\Widgets::where('publish', 1)->where('type', 'footer')->take(1)->get(); ?>
                        @foreach($widgets as $widget)
                        <div class="col-md-3">
                            <div class="contact-details">
                                <h4>{{ucfirst($widget->name)}}</h4>
                                {!! $widget->content !!}
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-2">
                            <h4>Follow Us</h4>
                            <ul class="social-icons">
                                @foreach($social as $media)
                                <li class="{{$media->class}}"><a href="{{$media->link}}" target="_blank" title="{{ucfirst($media->name)}}"><i class="{{$media->fa_class}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-2">
                        <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=faveohelpdesk.com','SiteLock','width=600,height=600,left=160,top=170');" ><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/faveohelpdesk.com" /></a>
                        </div>

                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">


                            <div class="col-md-12">
                                <p>Copyright © <?php echo date('Y') ?> · <a href="{{$set->website}}" target="_blank">{{$set->company}}</a>. All Rights Reserved.Powered by 
                                    <a href="http://www.ladybirdweb.com/" target="_blank"><img src="{{asset('dist/img/Ladybird1.png')}}" alt="Ladybird"></a></p>
                            </div>


                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Vendor -->
        <script src="{{asset('css/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('css/jquery.appear/jquery.appear.min.js')}}"></script>
        <script src="{{asset('css/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('css/jquery-cookie/jquery-cookie.min.js')}}"></script>
        <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('css/common/common.min.js')}}"></script>
        <script src="{{asset('css/jquery.validation/jquery.validation.min.js')}}"></script>
        <script src="{{asset('css/jquery.stellar/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('css/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
        <script src="{{asset('css/jquery.gmap/jquery.gmap.min.js')}}"></script>
        <script src="{{asset('css/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
        <script src="{{asset('css/isotope/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('css/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('css/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('css/vide/vide.min.js')}}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('js/theme.js')}}"></script>

        <!-- Theme Custom -->
        <script src="{{asset('js/custom.js')}}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{asset('js/theme.init.js')}}"></script>

        <script>
                                                                                                        function removeItem(id) {

                                                                                                        $.ajax({
                                                                                                        type: "GET",
                                                                                                                data:"id=" + id,
                                                                                                                url: "{{url('cart/remove/')}}",
                                                                                                                success: function (data) {
                                                                                                                location.reload();
                                                                                                                }
                                                                                                        });
                                                                                                        }
                                                                                                $.ajax({
                                                                                                dataType: "html",
                                                                                                        url: '{{url('twitter')}}',
                                                                                                        success: function (returnHTML) {
                                                                                                        $('#tweets').html(returnHTML);
                                                                                                        }
                                                                                                });
        </script>
        @yield('script')
        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
                ga('create', 'UA-12345678-1', 'auto');
                ga('send', 'pageview');
        </script>
        -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
console.log(Tawk_API);
Tawk_API.onChatEnded = function(){
    console.log(arguments);
};
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58c6979d6b2ec15bd9fce55d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>
@yield('end')
