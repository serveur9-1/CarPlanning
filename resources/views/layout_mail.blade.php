<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset("/assets/images/icon/logo.png")}}" alt="logo">
                        </a>
                    </div>
                    <div class="login-form">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<hr>
<div>
    <small>Copyright ©
        @if( date('Y') == 2019 )
            {{ date('Y')}}
        @else
            {{ '2019 - ' .date('Y') }}
        @endif
        carPlanning -
    </small>
    <small><a target="_blank" href="#"> Service client</a></small>
</div>
</body>

</html>
<!-- end document-->
