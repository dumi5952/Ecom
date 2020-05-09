<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class={{$menu_active==1? ' active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Add New Category</a></li>
                <li><a href="{{route('category.index')}}">List Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Add New Products</a></li>
                <li><a href="{{route('product.index')}}">List Products</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Add New Coupon</a></li>
                <li><a href="{{route('coupon.index')}}">List Coupons</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->


{{-- <div id="wrapper" class="">
    <div class="overlay" style="display: none;"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#"> BLESM </a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-camera"></i> Photo</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-facetime-video"></i> Video</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-headphones"></i> Music</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-cloud"></i> Cloud</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-th"></i> Apps</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a>
            </li>
        </ul>
    </nav>
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">...YOUR CONTENT...</div>
    </div>
</div> --}}
