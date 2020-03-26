
<header class="header d-flex flex-row justify-content-end align-items-center">

    <!-- Logo -->
    <div class="logo_container mr-auto">
        <div class="logo">
            <a href="#"><span>z</span>zeta<span>.</span></a>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main_nav justify-self-end">
        <span class="nav_items">
            <li class="active arabic" lang="ar" ><a href="{{route('home')}}" >الرئيسية</a></li>
            <li class="arabic"><a href="{{route('home')}}#autorisationsortie">طلب خروج</a></li>
            <li><a href="{{route('home')}}#element">بش تطلب قضيتك لدار</a></li>

            <li class="arabic"><a href="#contact"><span>إتصل بنا</span></a></li>


            {{--@if (checkAuthUser()!=null)--}}

                <span class="nav-item social-icons">
                <span class="fa-stack">
                    {{--<a href="{{checkAuthUser()['url']}}">--}}
                    @auth('benevole')
                    <a href="{{route('BenevoleshowDashboard')}}">

                                <i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i>
                    </a>
                </span>
                        <li> <a href="{{route('logout')}}"  style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a>
                    </li>
                    @endauth
                    @auth('quarantaine')
                        <a href="{{route('QuarantaineShowDashboard')}}">
                                <i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i>

                    </a>
                </span>

            <li> <a href="{{route('logout')}}"  style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a>
            </li>
                    @endauth
                    @auth('autorite')
                        <a href="{{route('QuarantaineShowDashboard')}}">
                                <i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i>

                         </a>
                </span>

                         <li> <a href="{{route('logout')}}"  style="font-size: 15px;color: #fc8760;"><i class="fa fa-sign-out">logout</i></a>
                        </li>
                    @endauth

                </span>
            {{--@endif--}}






        </ul>

    </nav>

    <!-- Hamburger
    <div class="hamburger_container">
        <span class="hamburger_text">Menu</span>
        <span class="hamburger_icon"></span>
    </div>
-->
</header>


