@include('inc.head')
<body>
    <div class="super_container">
    @include('inc.header')
        @yield('content')
    </div>
@yield('script')
@include('inc.scripts')
</body>
