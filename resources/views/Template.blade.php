<!DOCTYPE html>
<html>
<head>
<base href="{{url('')}}">
<title>Apps dev.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="{{url('assets/media/logos/favicon.ico')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
<link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<div class="d-flex flex-column flex-root">
<div class="page d-flex flex-row flex-column-fluid">
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
<div class="aside-logo flex-column-auto" id="kt_aside_logo">
<a href="javascript:void(0)">
<img alt="Logo" src="{{url('assets/media/logos/logo-1-dark.svg')}}" class="h-25px logo">
</a>
<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize"><span class="svg-icon svg-icon-1 rotate-180"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black"/><path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black"/></svg></span></div>
</div>
<div class="aside-menu flex-column-fluid">
<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
<div class="menu-item">
    <?php
    $dt_menu = App\Helpers\Bodo::menus();
    $dt_grupMenu = App\Helpers\Bodo::groupMenu();
    $dt_menuUnique = [];
    foreach ($dt_menu as $key => $menu) {
        $dt_menuUnique[] = $dt_menu[$key]->group_menu;
        if (isset($dt_grupMenu[$key]) && $dt_menuUnique[$key] == $dt_grupMenu[$key]->id) {
            echo '<div class="menu-item">'
            . '<div class="menu-content pt-8 pb-2">'
            . '<span class="menu-section text-muted text-uppercase fs-8 ls-1">' . $dt_grupMenu[$key]->nama . '</span>'
            . '</div></div>';
        }

        if (count($menu->childs) == 0) {
            echo '<a class="menu-link" href="' . url('') . '/' . $menu->routes . '">'
            . '<span class="menu-bullet">'
            . $menu->icon
            . '</span>'
            . '<span class="menu-title">' . $menu->title . '</span>'
            . '</a>';
        } else {
            echo '<div data-kt-menu-trigger="click" class="menu-item menu-accordion">'
            . '<span class="menu-link">
            <span class="menu-icon">
                ' . $menu->icon . '
            </span>
            <span class="menu-title">' . $menu->title . '</span>
            <span class="menu-arrow"></span>
        </span>';
            ?>
            @include('manageChild',['childs' => $menu->childs])
            <?php
            echo '</div>';
        }
    }
    ?>
</div>
</div>
</div>
</div>
</div>
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
<div id="kt_header" style="" class="header align-items-stretch">
<div class="container-fluid d-flex align-items-stretch justify-content-between">
<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"/><path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"/></svg></span></div>
</div>
<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0"><a href="{{url('')}}" class="d-lg-none"><img alt="Logo" src="{{url('assets/media/logos/logo-2.svg')}}" class="h-30px"></a></div>
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true"></div>
<div class="d-flex align-items-stretch flex-shrink-0">
<div class="d-flex align-items-stretch ms-1 ms-lg-3">
<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/><path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"/></svg></span></div>
</div>
<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
<div data-kt-search-element="wrapper">
<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off"><span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/><path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"/></svg></span>
@csrf
<input type="text" class="search-input form-control form-control-flush ps-10" name="search" placeholder="Search..." data-kt-search-element="input"><span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner"><span class="spinner-border h-15px w-15px align-middle text-gray-400"></span></span>
<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear"><span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/><rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/></svg></span></span>
<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar"></div>
</form>
</div>

</div>
</div>
</div>
<div class="d-flex align-items-center ms-1 ms-lg-3"></div>
<div class="d-flex align-items-center ms-1 ms-lg-3"></div>
<div class="d-flex align-items-center ms-1 ms-lg-3"></div>
<div class="d-flex align-items-center ms-1 ms-lg-3"></div>
<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"><img src="{{url('assets/media/avatars/300-1.jpg')}}" alt="user"></div>
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
<div class="menu-item px-3">
<div class="menu-content d-flex align-items-center px-3">
<div class="symbol symbol-50px me-5"><img alt="Logo" src="{{url('assets/media/avatars/300-1.jpg')}}"></div>
<div class="d-flex flex-column">
<div class="fw-bolder d-flex align-items-center fs-5">
Max Smith
</div><a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
</div>
</div>
</div>
<div class="separator my-2"></div>
<div class="menu-item px-5"><a href="{{url('');}}" class="menu-link px-5">Sign Out</a></div>
<div class="separator my-2"></div>
<div class="menu-item px-5"></div>
</div>
</div>
<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black"/><path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black"/></svg></span></div>
</div>
</div>
</div>
</div>
</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<div class="toolbar" id="kt_toolbar">
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
Dashboard
</h1>
</div>
<div class="d-flex align-items-center gap-2 gap-lg-3">
</div>
</div>
</div>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        @yield('content')
    </div>
</div>
</div>
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
    <div class="text-dark order-2 order-md-1"><span class="text-muted fw-bold me-1">2022&COPY;</span><a href="javascript:void(0);" class="text-gray-800 text-hover-primary">Keenthemes</a></div>
<span>APPS DEV</span>
</div>
</div>
</div>
</div>
</div>
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true"><span class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"/><path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"/></svg></span></div>
<script>var hostUrl="assets/";</script>
<script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{url('assets/js/scripts.bundle.js')}}"></script>
<script src="{{url('assets/js/custom/widgets.js')}}"></script>
</body>
</html>