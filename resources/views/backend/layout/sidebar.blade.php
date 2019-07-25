<aside class="sidebar">
    <div class="scrollbar-inner">

        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                <div class="user__name">{{Auth::user()->name}}</div>
                    <div class="user__email">{{Auth::user()->email}}</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
            </div>
        </div>

        <ul class="navigation">
        <li class="navigation__active"><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i> Trang chủ</a></li>

            <li class="navigation__sub @@variantsactive">
                <a href="#"><i class="zmdi zmdi-view-week"></i> Người dùng</a>

                <ul>
                    <li class="@@sidebaractive"><a href="{{route('user')}}">Danh sách người dùng</a></li>
                    <li class="@@boxedactive"><a href="{{route('user')}}">Thêm người dùng</a></li>
                    {{-- <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li> --}}
                </ul>
            </li>

            <li class="@@typeactive"><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

            <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

            <li class="navigation__sub @@tableactive">
                <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li class="@@normaltableactive"><a href="html-table.html">HTML Table</a></li>
                    <li class="@@datatableactive"><a href="data-table.html">Data Table</a></li>
                </ul>
            </li>

            <li class="navigation__sub @@formactive">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li class="@@formelementactive"><a href="form-elements.html">Basic Form Elements</a></li>
                    <li class="@@formcomponentactive"><a href="form-components.html">Form Components</a></li>
                    <li class="@@formvalidationactive"><a href="form-validation.html">Form Validation</a></li>
                </ul>
            </li>

           
</aside>
<section class="content">