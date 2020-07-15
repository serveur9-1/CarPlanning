<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="une plateforme de suivi pour les eleves du lycée">
    <meta name="author" content="Threeboys">
    <meta name="keywords" content="Car Planning">
        <!-- Title Page-->
    <title>@yield('title')</title>

    @include('share.stylesheets')
</head>

<body class="animsition">
<style type="text/css">
         .bg-gradient{
            background-color: #6c2f91;
          }
          .confirm-switch {
              width: 35px;
              height: 17px;
              border-radius: 8.5px;
              background: #fff;
              position: relative;
              cursor: pointer;
            }

            .confirm-switch input {
              position: absolute;
              left: 0;
              top: 0;
              right: 0;
              bottom: 0;
              width: 100%;
              height: 100%;
              opacity: 0;
            }

            .confirm-switch input + label {
              position: absolute;
              left: 0;
              top: 0;
              right: 0;
              bottom: 0;
              width: 100%;
              height: 100%;
            }

            .confirm-switch input + label:before {
              content: "";
              position: absolute;
              left: 0;
              top: 0;
              right: 0;
              bottom: 0;
              width: 100%;
              height: 100%;
              background: transparent;
              border-radius: 8.5px;
              -webkit-transition: all 0.2s;
              -moz-transition: all 0.2s;
              -o-transition: all 0.2s;
              transition: all 0.2s;
              cursor: pointer;
            }

            .confirm-switch input + label:after {
              content: "";
              position: absolute;
              top: 1px;
              left: 1px;
              width: 15px;
              height: 15px;
              border-radius: 50%;
              background: #fff;
              -webkit-transition: all 0.2s;
              -moz-transition: all 0.2s;
              -o-transition: all 0.2s;
              transition: all 0.2s;
              -webkit-box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
              box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
              cursor: pointer;
            }

            .confirm-switch input:checked + label:after {
              left: 19px;
            }

            .confirm-switch input:checked + label:before {
              background: #4cd3e3;
            }
  </style>

    <div class="page-wrapper">
        @include('share.left-sidebar-admin')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('share.navbar-top-admin')

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
