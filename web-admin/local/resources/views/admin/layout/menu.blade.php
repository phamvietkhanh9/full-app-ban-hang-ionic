@php($page = Request::segment(2))
<style type="text/css">
.menu-item{
	border-bottom: 1px solid #0c6057 !important;
}
</style>
<div class="admin-sidebar-brand">
    <!-- begin sidebar branding-->
    <img class="admin-brand-logo" src="{{Asset('assets/img/your-logok.png') }}" width="40" alt="ACTCMS Logo">
    <span class="admin-brand-content font-secondary"><a href="{{ Asset(env('admin').'/home') }}"> Khanh </a></span>
    <!-- end sidebar branding-->
    <div class="ml-auto">
        <!-- sidebar pin-->
        <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
        <!-- sidebar close for mobile device-->
        <a href="#" class="admin-close-sidebar"></a>
    </div>
</div>
<div class="admin-sidebar-wrapper js-scrollbar">
    <ul class="menu">
        <li class="menu-item @if($page === 'home' || $page == 'setting') active @endif">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Tổng quan
                        <span class="menu-arrow"></span>
                    </span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-shape-outline "></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/home') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Tổng quan</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-home">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ Asset(env('admin').'/setting') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Cấu hình</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-message-settings-variant">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ Asset(env('admin').'/text/add') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Ngôn ngữ App</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-message-settings-variant">
                            </i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="menu-item @if($page === 'language') active @endif">
            <a href="{{ Asset(env('admin').'/language') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Ngôn ngữ</span></span>
                <span class="menu-icon">
                    <i class="mdi mdi-calendar-edit"></i>
                </span>
            </a>
        </li> -->
        <li class="menu-item @if($page === 'slider' || $page == 'banner') active @endif">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Banners
                        <span class="menu-arrow"></span>
                    </span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-image-filter "></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/slider') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Welcome Slider</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-image-filter">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ Asset(env('admin').'/banner') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Banners</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-image">
                            </i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if($page === 'city') active @endif">
            <a href="{{ Asset(env('admin').'/city') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Quản lý thành phố</span></span>
                <span class="menu-icon">
                    <i class="mdi mdi-map-marker"></i>
                </span>
            </a>
        </li>
        <li class="menu-item @if($page === 'page') active @endif">
            <a href="{{ Asset(env('admin').'/page/add') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Bài viết App</span></span>
                <span class="menu-icon">
                    <i class="mdi mdi-file"></i>
                </span>
            </a>
        </li>
        <li class="menu-item @if($page === 'user') active @endif">
            <a href="{{ Asset(env('admin').'/user') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Quản lý nhà hàng</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-home"></i>
                </span>
            </a>
        </li>
        <li class="menu-item @if($page === 'offer') active @endif">
            <a href="{{ Asset(env('admin').'/offer') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Khuyến mãi</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-calendar"></i>
                </span>
            </a>
        </li>
        <li class="menu-item @if($page === 'delivery') active @endif">
            <a href="{{ Asset(env('admin').'/delivery') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Nhân viên giao hàng</span></span>
                <span class="menu-icon">
                    <i class="mdi mdi-account-clock"></i>
                </span>
            </a>
        </li>
        <li class="menu-item @if($page === 'order') active @endif">
            <a href="#" class="open-dropdown menu-link">
                <span class="menu-label">
                    <span class="menu-name">Quản lý đơn hàng
                        <?php
$cOrder = DB::table('orders')->where('status',0)->count();
$rOrder = DB::table('orders')->where('status',1)->count();
if($cOrder > 0)
{
?>
                        <span class="icon-badge badge-success badge badge-pill">{{ $cOrder }}</span>
                        <?php } ?>
                        <span class="menu-arrow"></span>
                    </span>
                </span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-cart"></i>
                </span>
            </a>
            <!--submenu-->
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/order?status=0') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Đơn hàng mới
                                @if($cOrder > 0)
                                <span class="icon-badge badge-success badge badge-pill">{{ $cOrder }}</span>
                                @endif
                            </span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-cart">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/order?status=1') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Đơn hàng đang thực hiện
                                @if($rOrder > 0)
                                <span class="icon-badge badge-success badge badge-pill">{{ $rOrder }}</span>
                                @endif
                            </span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-camera-control">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/order?status=2') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Đơn hàng đã hủy</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-cancel">
                            </i>
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ Asset(env('admin').'/order?status=5') }}" class=" menu-link">
                        <span class="menu-label">
                            <span class="menu-name">Đơn hàng đã giao</span>
                        </span>
                        <span class="menu-icon">
                            <i class="icon-placeholder  mdi mdi-check-all">
                            </i>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="menu-item">
            <a href="{{ Asset(env('admin').'/push') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Gởi thông báo</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-send"></i>
                </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ Asset(env('admin').'/report') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Báo cáo</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-file"></i>
                </span>
            </a>
        </li> -->
        <li class="menu-item">
            <a href="{{ Asset(env('admin').'/appUser') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Người dùng App</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-account"></i>
                </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ Asset(env('admin').'/logout') }}" class="menu-link">
                <span class="menu-label"><span class="menu-name">Thoát</span></span>
                <span class="menu-icon">
                    <i class="icon-placeholder mdi mdi-logout"></i>
                </span>
            </a>
        </li>
    </ul>
</div>