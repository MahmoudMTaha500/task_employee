<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class=" @if(Route::is('home') )  active @endif has-sub">
                    <a class="" href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                  
                </li>  

                <li class=" @if(Route::is('country.*') )  active @endif has-sub">
                    <a class="js-arrow  " href="#">
                        <i class="fas fa-flag"></i>Countries</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class=" @if(Route::is('country.index') )  active @endif " >
                            <a href="{{route('country.index')}}"> All Countries</a>
                        </li>
                        <li class=" @if(Route::is('country.create') )  active @endif ">
                            <a href="{{route('country.create')}}">Add Country</a>
                        </li>
                        <li>
                            <a href="index3.html">archive</a>
                        </li>
                        
                    </ul>
                </li>


              
            </ul>
        </nav>
    </div>
</aside>