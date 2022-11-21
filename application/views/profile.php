<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>HUD | Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/app.min.css" rel="stylesheet" />


<link href="assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />

</head>
<body>

<div id="app" class="app">

<div id="header" class="app-header">

<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<a href="index.html" class="brand-logo">
<span class="brand-img">
<span class="brand-img-text text-theme">H</span>
</span>
<span class="brand-text">HUD ADMIN</span>
</a>
</div>


<div class="menu">
<div class="menu-item dropdown">
<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
</a>
</div>
<div class="menu-item dropdown dropdown-mobile-full">
<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
<div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
</a>
<div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">
<div class="row row-grid gx-0">
<div class="col-4">
<a href="email_inbox.html" class="dropdown-item text-decoration-none p-3 bg-none">
<div class="position-relative">
<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
<i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
</div>
<div class="fw-500 fs-10px text-white">INBOX</div>
</a>
</div>
<div class="col-4">
<a href="pos_customer_order.html" target="_blank" class="dropdown-item text-decoration-none p-3 bg-none">
<div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
<div class="fw-500 fs-10px text-white">POS SYSTEM</div>
</a>
</div>
<div class="col-4">
<a href="calendar.html" class="dropdown-item text-decoration-none p-3 bg-none">
<div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
<div class="fw-500 fs-10px text-white">CALENDAR</div>
</a>
</div>
</div>
<div class="row row-grid gx-0">
<div class="col-4">
<a href="helper.html" class="dropdown-item text-decoration-none p-3 bg-none">
<div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
<div class="fw-500 fs-10px text-white">HELPER</div>
</a>
</div>
<div class="col-4">
<a href="settings.html" class="dropdown-item text-decoration-none p-3 bg-none">
<div class="position-relative">
<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
<i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
</div>
<div class="fw-500 fs-10px text-white">SETTINGS</div>
</a>
</div>
<div class="col-4">
<a href="widgets.html" class="dropdown-item text-decoration-none p-3 bg-none">
<div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
<div class="fw-500 fs-10px text-white">WIDGETS</div>
</a>
</div>
</div>
</div>
</div>
<div class="menu-item dropdown dropdown-mobile-full">
<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
<div class="menu-badge bg-theme"></div>
</a>
<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
<div class="dropdown-divider mt-1"></div>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
<div class="fs-20px">
<i class="bi bi-bag text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-white">NEW ORDER RECEIVED ($1,299)</div>
<div class="small">JUST NOW</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
<div class="fs-20px w-20px">
<i class="bi bi-person-circle text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-white">3 NEW ACCOUNT CREATED</div>
<div class="small">2 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
<div class="fs-20px w-20px">
<i class="bi bi-gear text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-white">SETUP COMPLETED</div>
<div class="small">3 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
<div class="fs-20px w-20px">
<i class="bi bi-grid text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-white">WIDGET INSTALLATION DONE</div>
<div class="small">5 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
<div class="fs-20px w-20px">
<i class="bi bi-credit-card text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-white">PAYMENT METHOD ENABLED</div>
<div class="small">10 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<hr class="bg-white-transparent-5 mb-0 mt-2" />
<div class="py-10px mb-n2 text-center">
<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
</div>
</div>
</div>
<div class="menu-item dropdown dropdown-mobile-full">
<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/profile.jpg" alt="Profile" height="60" />
</div>
<div class="menu-text d-sm-block d-none"><span class="__cf_email__" data-cfemail="9ce9eff9eef2fdf1f9dcfdfffff3e9f2e8b2fff3f1">[email&#160;protected]</span></div>
</a>
<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
<a class="dropdown-item d-flex align-items-center" href="profile.html">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="email_inbox.html">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="calendar.html">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="settings.html">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="page_login.html">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
</div>
</div>
</div>


<form class="menu-search" method="POST" name="header_search_form">
<div class="menu-search-container">
<div class="menu-search-icon"><i class="bi bi-search"></i></div>
<div class="menu-search-input">
<input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
</div>
<div class="menu-search-icon">
<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
</div>
</div>
</form>

</div>


<div id="sidebar" class="app-sidebar">

<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

<div class="menu">
<div class="menu-header">Navigation</div>
<div class="menu-item">
<a href="index.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-cpu"></i></span>
<span class="menu-text">Dashboard</span>
</a>
</div>
<div class="menu-item">
<a href="analytics.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
<span class="menu-text">Analytics</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon">
<i class="bi bi-envelope"></i>
</span>
<span class="menu-text">Email</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="email_inbox.html" class="menu-link">
<span class="menu-text">Inbox</span>
</a>
</div>
<div class="menu-item">
<a href="email_compose.html" class="menu-link">
<span class="menu-text">Compose</span>
</a>
</div>
<div class="menu-item">
<a href="email_detail.html" class="menu-link">
<span class="menu-text">Detail</span>
</a>
</div>
</div>
</div>
<div class="menu-header">Components</div>
<div class="menu-item">
<a href="widgets.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-columns-gap"></i></span>
<span class="menu-text">Widgets</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="javascript:;" class="menu-link">
<div class="menu-icon">
<i class="bi bi-bag-check"></i>
<span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
</div>
<div class="menu-text d-flex align-items-center">POS System</div>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="pos_customer_order.html" target="_blank" class="menu-link">
<div class="menu-text">Customer Order</div>
</a>
</div>
<div class="menu-item">
<a href="pos_kitchen_order.html" target="_blank" class="menu-link">
<div class="menu-text">Kitchen Order</div>
</a>
</div>
<div class="menu-item">
<a href="pos_counter_checkout.html" target="_blank" class="menu-link">
<div class="menu-text">Counter Checkout</div>
</a>
</div>
<div class="menu-item">
<a href="pos_table_booking.html" target="_blank" class="menu-link">
<div class="menu-text">Table Booking</div>
</a>
</div>
<div class="menu-item">
<a href="pos_menu_stock.html" target="_blank" class="menu-link">
<div class="menu-text">Menu Stock</div>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-controller"></i></span>
<span class="menu-text">UI Kits</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="ui_bootstrap.html" class="menu-link">
<span class="menu-text">Bootstrap</span>
</a>
</div>
<div class="menu-item">
<a href="ui_buttons.html" class="menu-link">
<span class="menu-text">Buttons</span>
</a>
</div>
<div class="menu-item">
<a href="ui_card.html" class="menu-link">
<span class="menu-text">Card</span>
</a>
</div>
<div class="menu-item">
<a href="ui_icons.html" class="menu-link">
<span class="menu-text">Icons</span>
</a>
</div>
<div class="menu-item">
<a href="ui_modal_notification.html" class="menu-link">
<span class="menu-text">Modal & Notification</span>
</a>
</div>
<div class="menu-item">
<a href="ui_typography.html" class="menu-link">
<span class="menu-text">Typography</span>
</a>
</div>
<div class="menu-item">
<a href="ui_tabs_accordions.html" class="menu-link">
<span class="menu-text">Tabs & Accordions</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-pen"></i></span>
<span class="menu-text">Forms</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="form_elements.html" class="menu-link">
<span class="menu-text">Form Elements</span>
</a>
</div>
<div class="menu-item">
<a href="form_plugins.html" class="menu-link">
<span class="menu-text">Form Plugins</span>
</a>
</div>
<div class="menu-item">
<a href="form_wizards.html" class="menu-link">
<span class="menu-text">Wizards</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
<span class="menu-text">Tables</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="table_elements.html" class="menu-link">
<span class="menu-text">Table Elements</span>
</a>
</div>
<div class="menu-item">
<a href="table_plugins.html" class="menu-link">
<span class="menu-text">Table Plugins</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-pie-chart"></i></span>
<span class="menu-text">Charts</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="chart_js.html" class="menu-link">
<span class="menu-text">Chart.js</span>
</a>
</div>
<div class="menu-item">
<a href="chart_apex.html" class="menu-link">
<span class="menu-text">Apexcharts.js</span>
</a>
</div>
</div>
</div>
<div class="menu-item">
<a href="map.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-compass"></i></span>
<span class="menu-text">Map</span>
</a>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-layout-sidebar"></i></span>
<span class="menu-text">Layout</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="layout_starter.html" class="menu-link">
<span class="menu-text">Starter Page</span>
</a>
</div>
<div class="menu-item">
<a href="layout_fixed_footer.html" class="menu-link">
<span class="menu-text">Fixed Footer</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_height.html" class="menu-link">
<span class="menu-text">Full Height</span>
</a>
</div>
<div class="menu-item">
<a href="layout_full_width.html" class="menu-link">
<span class="menu-text">Full Width</span>
</a>
</div>
<div class="menu-item">
<a href="layout_boxed_layout.html" class="menu-link">
<span class="menu-text">Boxed Layout</span>
</a>
</div>
<div class="menu-item">
<a href="layout_collapsed_sidebar.html" class="menu-link">
<span class="menu-text">Collapsed Sidebar</span>
</a>
</div>
</div>
</div>
<div class="menu-item has-sub">
<a href="#" class="menu-link">
<span class="menu-icon"><i class="bi bi-collection"></i></span>
<span class="menu-text">Pages</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="page_scrum_board.html" class="menu-link">
<span class="menu-text">Scrum Board</span>
</a>
</div>
<div class="menu-item">
<a href="page_products.html" class="menu-link">
<span class="menu-text">Products</span>
</a>
</div>
<div class="menu-item">
<a href="page_orders.html" class="menu-link">
<span class="menu-text">Orders</span>
</a>
</div>
<div class="menu-item">
<a href="page_gallery.html" class="menu-link">
<span class="menu-text">Gallery</span>
</a>
</div>
<div class="menu-item">
<a href="page_search_results.html" class="menu-link">
<span class="menu-text">Search Results</span>
</a>
</div>
<div class="menu-item">
<a href="page_coming_soon.html" class="menu-link">
<span class="menu-text">Coming Soon Page</span>
</a>
</div>
<div class="menu-item">
<a href="page_404_error.html" class="menu-link">
<span class="menu-text">404 Error Page</span>
</a>
</div>
<div class="menu-item">
<a href="page_login.html" class="menu-link">
<span class="menu-text">Login</span>
</a>
</div>
<div class="menu-item">
<a href="page_register.html" class="menu-link">
<span class="menu-text">Register</span>
</a>
</div>
</div>
</div>
<div class="menu-divider"></div>
<div class="menu-header">Users</div>
<div class="menu-item active">
<a href="profile.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-people"></i></span>
<span class="menu-text">Profile</span>
</a>
</div>
<div class="menu-item">
<a href="calendar.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-calendar4"></i></span>
<span class="menu-text">Calendar</span>
</a>
</div>
<div class="menu-item">
<a href="settings.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-gear"></i></span>
<span class="menu-text">Settings</span>
</a>
</div>
<div class="menu-item">
<a href="helper.html" class="menu-link">
<span class="menu-icon"><i class="bi bi-gem"></i></span>
<span class="menu-text">Helper</span>
</a>
</div>
</div>

<div class="p-3 px-4 mt-auto">
<a href="documentation/index.html" target="_blank" class="btn d-block btn-outline-theme">
<i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
</a>
</div>
</div>

</div>


<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">
<div class="card">
<div class="card-body p-0">

<div class="profile">

<div class="profile-container">

<div class="profile-sidebar">
<div class="desktop-sticky-top">
<div class="profile-img">
<img src="assets/img/user/profile.jpg" alt="" />
</div>

<h4>John Smith</h4>
<div class="mb-3 text-white text-opacity-50 fw-bold mt-n2">@johnsmith</div>
<p>
Principal UXUI Design & Brand Architecture for HUD. Creator of SeanTheme.
Bringing the world closer together. Studied Computer Science and Psychology at Harvard University.
</p>
<div class="mb-1">
<i class="fa fa-map-marker-alt fa-fw text-white text-opacity-50"></i> New York, NY
</div>
<div class="mb-3">
<i class="fa fa-link fa-fw text-white text-opacity-50"></i> seantheme.com/hud
</div>
<hr class="mt-4 mb-4" />

<div class="fw-bold mb-3 fs-16px">People to follow</div>
<div class="d-flex align-items-center mb-3">
<img src="assets/img/user/user-1.jpg" alt="" width="30" class="rounded-circle" />
<div class="flex-fill px-3">
<div class="fw-bold text-truncate w-100px">Noor Rowe</div>
<div class="fs-12px text-white text-opacity-50">3.1m followers</div>
</div>
<a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a>
</div>
<div class="d-flex align-items-center mb-3">
<img src="assets/img/user/user-2.jpg" alt="" width="30" class="rounded-circle" />
<div class="flex-fill px-3">
<div class="fw-bold text-truncate w-100px">Abbey Parker</div>
<div class="fs-12px text-white text-opacity-50">302k followers</div>
</div>
<a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a>
</div>
<div class="d-flex align-items-center mb-3">
<img src="assets/img/user/user-3.jpg" alt="" width="30" class="rounded-circle" />
<div class="flex-fill px-3">
<div class="fw-bold text-truncate w-100px">Savannah Nicholson</div>
<div class="fs-12px text-white text-opacity-50">720k followers</div>
</div>
<a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a>
</div>
<div class="d-flex align-items-center mb-3">
<img src="assets/img/user/user-4.jpg" alt="" width="30" class="rounded-circle" />
<div class="flex-fill px-3">
<div class="fw-bold text-truncate w-100px">Kenny Bright</div>
<div class="fs-12px text-white text-opacity-50">1.4m followers</div>
</div>
<a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a>
</div>
<div class="d-flex align-items-center">
<img src="assets/img/user/user-5.jpg" alt="" width="30" class="rounded-circle" />
<div class="flex-fill px-3">
<div class="fw-bold text-truncate w-100px">Cara Poole</div>
<div class="fs-12px text-white text-opacity-50">989k followers</div>
</div>
<a href="#" class="btn btn-sm btn-outline-theme fs-11px">Follow</a>
</div>
</div>
</div>


<div class="profile-content">
<ul class="profile-tab nav nav-tabs nav-tabs-v2">
<li class="nav-item">
<a href="#profile-post" class="nav-link active" data-bs-toggle="tab">
<div class="nav-field">Posts</div>
<div class="nav-value">382</div>
</a>
</li>
<li class="nav-item">
<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
<div class="nav-field">Followers</div>
<div class="nav-value">1.3m</div>
</a>
</li>
<li class="nav-item">
<a href="#profile-media" class="nav-link" data-bs-toggle="tab">
<div class="nav-field">Photos</div>
<div class="nav-value">1,397</div>
</a>
</li>
<li class="nav-item">
<a href="#profile-video" class="nav-link" data-bs-toggle="tab">
<div class="nav-field">Videos</div>
<div class="nav-value">120</div>
</a>
</li>
<li class="nav-item">
<a href="#profile-followers" class="nav-link" data-bs-toggle="tab">
<div class="nav-field">Following</div>
<div class="nav-value">2,592</div>
</a>
</li>
</ul>
<div class="profile-content-container">
<div class="row gx-4">
<div class="col-xl-8">
<div class="tab-content p-0">

<div class="tab-pane fade show active" id="profile-post">
<div class="card mb-3">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<a href="#"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a>
<div class="flex-fill ps-2">
<div class="fw-bold"><a href="#" class="text-decoration-none">Clyde Stanley</a> at <a href="#" class="text-decoration-none">South Lake Tahoe, California</a></div>
<div class="small text-white text-opacity-50">March 16</div>
</div>
</div>

<p>Best vacation of 2017</p>
<div class="profile-img-list">
<div class="profile-img-list-item main"><a href="assets/img/gallery/gallery-1.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-1.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-2.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-2.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-3.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-3.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-4.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-4.jpg)"></span></a></div>
<div class="profile-img-list-item with-number">
<a href="assets/img/gallery/gallery-5.jpg" data-lity class="profile-img-list-link">
<span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-5.jpg)"></span>
<div class="profile-img-number">+12</div>
</a>
</div>
</div>
<hr class="mb-1" />

<div class="row text-center fw-bold">
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Likes
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-comment me-1 d-block d-sm-inline"></i> Comment
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="fa fa-share me-1 d-block d-sm-inline"></i> Share
</a>
</div>
</div>
<hr class="mb-3 mt-1" />
<div class="d-flex align-items-center">
<img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
<div class="flex-fill ps-2">
<div class="position-relative d-flex align-items-center">
<input type="text" class="form-control rounded-pill bg-white bg-opacity-15" style="padding-right: 120px;" placeholder="Write a comment..." />
<div class="position-absolute end-0 text-center">
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-smile"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-camera"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-video"></i></a>
<a href="#" class="text-white text-opacity-50 me-3"><i class="fa fa-paw"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="card mb-3">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<a href="#"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a>
<div class="flex-fill ps-2">
<div class="fw-bold"><a href="#" class="text-decoration-none">Clyde Stanley</a> is watching <a href="#" class="text-decoration-none">PATAGONIA 8k</a></div>
<div class="small text-white text-opacity-50">March 12</div>
</div>
</div>

<p>Nice PATAGONIA footage in 8K</p>
<div class="ratio ratio-16x9">
<iframe src="https://www.youtube.com/embed/ChOhcHD8fBA?showinfo=0"></iframe>
</div>
<hr class="mb-1" />

<div class="row text-center fw-bold">
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Likes
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-comment me-1 d-block d-sm-inline"></i> Comment
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="fa fa-share me-1 d-block d-sm-inline"></i> Share
</a>
</div>
</div>
<hr class="mb-3 mt-1" />
<div class="d-flex align-items-center">
<img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
<div class="flex-fill ps-2">
<div class="position-relative d-flex align-items-center">
<input type="text" class="form-control rounded-pill bg-white bg-opacity-15" style="padding-right: 120px;" placeholder="Write a comment..." />
<div class="position-absolute end-0 text-center">
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-smile"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-camera"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-video"></i></a>
<a href="#" class="text-white text-opacity-50 me-3"><i class="fa fa-paw"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="card mb-3">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<a href="#" class="text-decoration-none"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a>
<div class="flex-fill ps-2">
<div class="fw-bold"><a href="#" class="text-decoration-none">Clyde Stanley</a></div>
<div class="small text-white text-opacity-50">March 4</div>
</div>
</div>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />Quisque sodales urna justo, ac ultrices magna consectetur id.<br /><br />
Donec tempor ligula sit amet nunc porta, sed aliquam leo sagittis.<br />
Ut auctor congue efficitur. Praesent aliquam pulvinar neque, placerat semper massa elementum et.
</p>
<hr class="mb-1" />

<div class="row text-center fw-bold">
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Likes
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-comment me-1 d-block d-sm-inline"></i> Comment
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="fa fa-share me-1 d-block d-sm-inline"></i> Share
</a>
</div>
</div>
<hr class="mb-3 mt-1" />
<div class="d-flex align-items-center">
<img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
<div class="flex-fill ps-2">
<div class="position-relative d-flex align-items-center">
<input type="text" class="form-control rounded-pill bg-white bg-opacity-15" style="padding-right: 120px;" placeholder="Write a comment..." />
<div class="position-absolute end-0 text-center">
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-smile"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-camera"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-video"></i></a>
<a href="#" class="text-white text-opacity-50 me-3"><i class="fa fa-paw"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="card">
<div class="card-body">

<div class="d-flex align-items-center mb-3">
<a href="#"><img src="assets/img/user/profile.jpg" alt="" width="50" class="rounded-circle" /></a>
<div class="flex-fill ps-2">
<div class="fw-bold"><a href="#" class="text-decoration-none">Clyde Stanley</a> at <a href="#" class="text-decoration-none">United States</a></div>
<div class="small text-white text-opacity-50">May 5</div>
</div>
</div>

<p>Business Trip</p>
<div class="profile-img-list">
<div class="profile-img-list-item main"><a href="assets/img/gallery/gallery-5.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-5.jpg)"></span></a></div>
<div class="profile-img-list-item main"><a href="assets/img/gallery/gallery-6.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-6.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-7.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-7.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-8.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-8.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-9.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-9.jpg)"></span></a></div>
<div class="profile-img-list-item"><a href="assets/img/gallery/gallery-10.jpg" data-lity class="profile-img-list-link"><span class="profile-img-content" style="background-image: url(assets/img/gallery/gallery-10.jpg)"></span></a></div>
</div>
<hr class="mb-1" />

<div class="row text-center fw-bold">
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-thumbs-up me-1 d-block d-sm-inline"></i> Likes
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="far fa-comment me-1 d-block d-sm-inline"></i> Comment
</a>
</div>
<div class="col">
<a href="#" class="text-white text-opacity-50 text-decoration-none d-block p-2">
<i class="fa fa-share me-1 d-block d-sm-inline"></i> Share
</a>
</div>
</div>
<hr class="mt-1" />
<div class="d-flex align-items-center">
<img src="assets/img/user/user.jpg" alt="" width="35" class="rounded-circle" />
<div class="flex-fill ps-2">
<div class="position-relative d-flex align-items-center">
<input type="text" class="form-control rounded-pill bg-white bg-opacity-15" style="padding-right: 120px;" placeholder="Write a comment..." />
<div class="position-absolute end-0 text-center">
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-smile"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-camera"></i></a>
<a href="#" class="text-white text-opacity-50 me-2"><i class="fa fa-video"></i></a>
<a href="#" class="text-white text-opacity-50 me-3"><i class="fa fa-paw"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
</div>


<div class="tab-pane fade" id="profile-followers">
<div class="list-group">
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-1.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Ethel Wilkes</a></div>
<div class="text-white text-opacity-50 fs-13px">North Raundspic</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-2.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Shanaya Hansen</a></div>
<div class="text-white text-opacity-50 fs-13px">North Raundspic</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-3.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">James Allman</a></div>
<div class="text-white text-opacity-50 fs-13px">North Raundspic</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-4.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Marie Welsh</a></div>
<div class="text-white text-opacity-50 fs-13px">Crencheporford</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-5.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Lamar Kirkland</a></div>
<div class="text-white text-opacity-50 fs-13px">Prince Ewoodswan</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-6.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Bentley Osborne</a></div>
<div class="text-white text-opacity-50 fs-13px">Red Suvern</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-7.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Ollie Goulding</a></div>
<div class="text-white text-opacity-50 fs-13px">Doa</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-8.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Hiba Calvert</a></div>
<div class="text-white text-opacity-50 fs-13px">Stemunds</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-9.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Rivka Redfern</a></div>
<div class="text-white text-opacity-50 fs-13px">Fallnee</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
<div class="list-group-item d-flex align-items-center">
<img src="assets/img/user/user-10.jpg" alt="" width="50" class="rounded-sm ms-n2" />
<div class="flex-fill px-3">
<div><a href="#" class="text-white fw-bold text-decoration-none">Roshni Fernandez</a></div>
<div class="text-white text-opacity-50 fs-13px">Mount Lerdo</div>
</div>
<a href="#" class="btn btn-outline-theme">Follow</a>
</div>
</div>
<div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div>
</div>


<div class="tab-pane fade" id="profile-media">
<div class="card mb-3">
<div class="card-header fw-bold bg-transparent">May 20</div>
<div class="card-body">
<div class="widget-img-list">
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-1.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-1.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-2.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-2.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-3.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-3.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-4.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-4.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-5.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-5.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-6.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-6.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-7.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-7.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-8.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-8.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-9.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-9.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-10.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-10.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-11.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-11.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-12.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-12.jpg)"></span></a></div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="card">
<div class="card-header fw-bold bg-transparent">May 16</div>
<div class="card-body">
<div class="widget-img-list">
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-13.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-13.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-14.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-14.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-15.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-15.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-16.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-16.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-17.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-17.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-18.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-18.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-19.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-19.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-20.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-20.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-21.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-21.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-22.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-22.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-23.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-23.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-24.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-24.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-25.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-25.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-26.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-26.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-27.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-27.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-28.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-28.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-29.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-29.jpg)"></span></a></div>
<div class="widget-img-list-item"><a href="assets/img/gallery/gallery-30.jpg" data-lity><span class="img" style="background-image: url(assets/img/gallery/gallery-30.jpg)"></span></a></div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="text-center p-3"><a href="#" class="text-white text-decoration-none">Show more <b class="caret"></b></a></div>
</div>


<div class="tab-pane fade" id="profile-video">
<div class="card mb-3">
<div class="card-header fw-bold bg-transparent">Collections #1</div>
<div class="card-body">
<div class="row gx-1">
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity="">
<img src="../../img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity="">
<img src="../../img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity="">
<img src="../../img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity="">
<img src="../../img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity="">
<img src="../../img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity="">
<img src="../../img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity="">
<img src="../../img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity="">
<img src="../../img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
<div class="card mb-3">
<div class="card-header fw-bold bg-transparent">Collections #2</div>
<div class="card-body">
<div class="row gx-1">
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity="">
<img src="../../img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity="">
<img src="../../img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=QgQ7MWLsw1w" data-lity="">
<img src="../../img.youtube.com/vi/QgQ7MWLsw1w/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity="">
<img src="../../img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity="">
<img src="../../img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity="">
<img src="../../img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity="">
<img src="../../img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
<div class="col-md-4 col-sm-6 mb-1">
<a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity="">
<img src="../../img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg" alt="" class="d-block w-100">
</a>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
</div>

</div>
</div>
<div class="col-xl-4">
<div class="desktop-sticky-top d-none d-lg-block">
<div class="card mb-3">
<div class="list-group list-group-flush">
<div class="list-group-item fw-bold px-3 d-flex">
<span class="flex-fill">Trends for you</span>
<a href="#" class="text-white text-opacity-50"><i class="fa fa-cog"></i></a>
</div>
<div class="list-group-item px-3">
<div class="text-white text-opacity-50"><small><strong>Trending Worldwide</strong></small></div>
<div class="fw-bold mb-2">#BreakingNews</div>
<a href="#" class="card text-white text-decoration-none mb-1">
<div class="card-body">
<div class="row no-gutters">
<div class="col-md-8">
<div class="small text-white text-opacity-50 mb-1 mt-n1">Space</div>
<div class="h-40px fs-13px overflow-hidden mb-n1">Distant star explosion is brightest ever seen, study finds</div>
</div>
<div class="col-md-4 d-flex">
<div class="h-100 w-100" style="background: url(assets/img/gallery/news-1.jpg) center; background-size: cover;"></div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</a>
<div><small class="text-white text-opacity-50">1.89m share</small></div>
</div>
<div class="list-group-item px-3">
<div class="fw-bold mb-2">#TrollingForGood</div>
<div class="fs-13px mb-1">Be a good Troll and spread some positivity on HUD today.</div>
<div><small class="text-white text-opacity-50"><i class="fa fa-external-link-square-alt"></i> Promoted by HUD Trolls</small></div>
</div>
<div class="list-group-item px-3">
<div class="text-white text-opacity-50"><small><strong>Trending Worldwide</strong></small></div>
<div class="fw-bold mb-2">#CronaOutbreak</div>
<div class="fs-13px mb-1">The coronavirus is affecting 210 countries around the world and 2 ...</div>
<div><small class="text-white text-opacity-50">49.3m share</small></div>
</div>
<div class="list-group-item px-3">
<div class="text-white text-opacity-50"><small><strong>Trending in New York</strong></small></div>
<div class="fw-bold mb-2">#CoronavirusPandemic</div>
<a href="#" class="card mb-1 text-white text-decoration-none">
<div class="card-body">
<div class="row no-gutters">
<div class="col-md-8">
<div class="fs-12px text-white text-opacity-50 mt-n1">Coronavirus</div>
<div class="h-40px fs-13px overflow-hidden mb-n1">Coronavirus: US suspends travel from Europe</div>
</div>
<div class="col-md-4 d-flex">
<div class="h-100 w-100" style="background: url(assets/img/gallery/news-2.jpg) center; background-size: cover;"></div>
</div>
</div>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</a>
<div><small class="text-white text-opacity-50">821k share</small></div>
</div>
<a href="#" class="list-group-item list-group-action text-center">
Show more
</a>
</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>
</div>
</div>


<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="app-theme-panel">
<div class="app-theme-panel-container">
<a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
<div class="app-theme-panel-content">
<div class="small fw-bold text-white mb-1">Theme Color</div>
<div class="card mb-3">

<div class="card-body p-2">

<div class="app-theme-list">
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
<div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
<div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>
<div class="small fw-bold text-white mb-1">Theme Cover</div>
<div class="card">

<div class="card-body p-2">

<div class="app-theme-cover">
<div class="app-theme-cover-item active">
<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
</div>
<div class="app-theme-cover-item">
<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
</div>
<div class="app-theme-cover-item">
<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
</div>
<div class="app-theme-cover-item">
<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
</div>
<div class="app-theme-cover-item">
<a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
</div>
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="927f9e1f540256f17e827b51-text/javascript"></script>
<script src="assets/js/app.min.js" type="927f9e1f540256f17e827b51-text/javascript"></script>


<script src="assets/plugins/lity/dist/lity.min.js" type="927f9e1f540256f17e827b51-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="927f9e1f540256f17e827b51-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72463ce03ad14aba","version":"2022.6.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/hud/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 09:10:03 GMT -->
</html>
