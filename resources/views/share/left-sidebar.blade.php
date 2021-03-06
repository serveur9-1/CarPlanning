<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{ asset('/assets/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('home')}}"><i class="fas fa-tachometer-alt"></i>Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('souscriptions.index')}}"><i class="far fa-check-square"></i>Souscription</a>
                        </li>
                        <li>
                            <a href="{{ route('kilometrage.edit')}}"><i class="fas fa-table"></i>Changer Kilométrage</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('/assets/images/icon/logo.png')}}" alt="edu Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('home')}}"><i class="fas fa-tachometer-alt"></i>Accueil</a>
                        </li>
                        <li>
                            <a href="{{ route('souscriptions.index')}}"><i class="far fa-check-square"></i>Souscription</a>
                        </li>
                        @if(!Auth::user()->is_admin)
                            <li>
                                <a href="{{ route('kilometrage.edit')}}"><i class="fas fa-table"></i>Changer Kilométrage</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
