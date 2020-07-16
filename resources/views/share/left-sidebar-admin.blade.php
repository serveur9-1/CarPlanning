<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a href="#">
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
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('HomeAdmin')}}"><i class="fas fa-users"></i>Utilisateurs</a>
                        </li>
                        <!-- <li>
                            <a href="{{ route('HomeAdmin')}}">
                            <i class="fas fa-user"></i>Users</a>
                        </li> -->
                        <li>
                            <a href="{{ route('marques')}}">
                            <i class="fas fa-table"></i>Marques</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Souscription</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Individuelle</a>
                                </li>
                                <li>
                                    <a href="#">Professionnelle</a>
                                </li>
                            </ul>
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
                        <!-- <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('HomeAdmin')}}"><i class="fas fa-users"></i>Utilisateurs</a>
                        </li> -->
                        <li>
                            <a href="{{ route('marques')}}">
                            <i class="fas fa-table"></i>Marques</a>
                        </li>
                        <li>
                            <a href="{{ route('suscribers')}}">
                            <i class="fas fa-copy"></i>Souscription</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
