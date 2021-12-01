@auth()
    @include('dashboard.navbars.navs.auth')
@endauth
    
@guest()
    @include('dashboard.navbars.navs.guest')
@endguest