<header class="header d-flex flex-row justify-content-end align-items-center">

    <!-- Logo -->
    <div class="logo_container mr-auto">
        <div class="logo">
            <a href="#"><span>z</span>zeta<span>.</span></a>
        </div>
    </div>

    <!-- Main Navigation -->
    <span class="main_nav justify-self-end">
        <span class="nav_items">
            <li class="active arabic" lang="ar"><a href="{{route('home')}}">الرئيسية</a></li>
            @auth('quarantaine')

            <li class="arabic"><a href="{{route('home')}}">طلب خروج</a></li>
            <li><a href="{{route('home')}}#course">بش تطلب قضيتك لدار</a></li>
            @endauth



            {{--@if (checkAuthUser()!=null)--}}

            <span class="nav-item social-icons">

                    {{--<a href="{{checkAuthUser()['url']}}">--}}
                @auth('benevole')
                <span class="fa-stack">
                    <a href="{{route('BenevoleshowDashboard')}}"><i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i></a>
                </span>
                <li><a href="{{route('logout')}}" style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a></li>

                @endauth
                @auth('quarantaine')
                <span class="fa-stack">
                    <a href="{{route('QuarantaineShowDashboard')}}"><i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i></a>
                </span>
                <li> <a href="{{route('logout')}}" style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a></li>
                @endauth

                @auth('autorite')
                <span class="fa-stack">
                    <a href="{{route('QuarantaineShowDashboard')}}"><i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i></a>
                </span>
               <li><a href="{{route('logout')}}" style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a></li>
                @endauth

                @guest('benevole')
                    @guest('quarantaine')
                        @guest('autorite')
                <span class="fa-stack">
                    <a href="{{route('register')}}"><i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i></a>
                </span>
                        @endguest
                    @endguest
                @endguest
            </span>
        </span>
    </span>

    <!-- Hamburger
    <div class="hamburger_container">
        <span class="hamburger_text">Menu</span>
        <span class="hamburger_icon"></span>
    </div>
-->
</header>


