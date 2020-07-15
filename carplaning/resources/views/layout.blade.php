<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Threeboys">
        <!-- Title Page-->
    <title>@yield('title')</title>

    @include('share.stylesheets')
</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('share.left-sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('share.navbar-top')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @if(Session::has('success'))
                    <div class="container-fluid " style="z-index: 9999">
                        <div class="row">
                            <div class=" col-md-12 col-sm-12 col-lg-12 alert alert-success alert-rounded text-center">
                                {{ Session::get('success')}}
                            </div>
                        </div>
                    </div>
                @endif
                @yield('content')
            </div>

            @yield('alert')
            
        </div>
        @include('share.footer')

    </div>

    @include('share.scripts')

</body>

</html>
<!-- end document-->
