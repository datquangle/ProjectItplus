<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/subas/subas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2023 17:59:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DC Sneaker |@yield('page')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/assetscustomer/img/icon/favicon.png')}}">

    <!-- All CSS Files -->
    @include('customer.layouts.css')

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        @include('customer.layouts.header')

        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA -->
        @include('customer.layouts.mobilemenu')

        <!-- END MOBILE MENU AREA -->

        <!-- START SLIDER AREA -->
        @yield('slider')

        <!-- END SLIDER AREA -->

        <!-- Start page content -->

        

        <section id="page-content" class="page-wrapper section">
            @yield('content')
            
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->

            <!-- BLOG SECTION END -->
        </section>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        @include('customer.layouts.footer')

        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->

        {{-- @include('customer.layouts.quickview') --}}

        <!-- END QUICKVIEW PRODUCT -->

        <!--style-customizer start -->

        <!--style-customizer end -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    @include('customer.layouts.js')


</body>


<!-- Mirrored from htmldemo.net/subas/subas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2023 17:59:52 GMT -->
</html>

