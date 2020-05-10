<!--Header-part-->
<!--close-Header-part-->
<!--top-Header-menu-->
{{-- <header class="header">
    <div class="header-area">
        <div class="container" >
            <div id="user-nav" class="navbar navbar-inverse" >
                <ul class="nav">
                    <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                    <li class="">
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon icon-share-alt"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
            <!--close-top-Header-menu-->
            <!--start-top-serch-->
            <div id="search" style="position: fixed">
                <input type="text" placeholder="Search here..."/>
                <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
            </div>
            <!--close-top-serch-->

        </div>
    </div>
</header> --}}


<header>
    <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/admin')}}">FoodToGo</a>
          </div>
          <ul class="nav">
          <li class="active"><a href="{{url('/admin')}}"><i class="icon icon-home"> Home</i></a></li>
            <li><a href="{{url('/admin/settings')}}"><i class="icon icon-cog"> Settings</a></i></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> Logout

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

          </ul>
          <form class="navbar-form navbar-left pull-right" action="/action_page.php">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </nav>

</header>
