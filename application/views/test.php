
<!doctype html>
<html lang="en">
<head>
<title>Oculux | Web Analytics</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/font-awesome/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/font-awesome/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/animate-css/vivify.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css" />
<link rel="stylesheet" href="<?= base_url()?>/assets/vendor/c3/c3.min.css" />

<link rel="stylesheet" href="<?= base_url()?>assets/css/site.min.css">
</head>

<body class="theme-cyan font-montserrat">

<div class="page-loader-wrapper">
<div class="loader">
<div class="bar1"></div>
<div class="bar2"></div>
<div class="bar3"></div>
<div class="bar4"></div>
<div class="bar5"></div>
</div>
</div>


<div class="overlay"></div>
<div id="wrapper">
<nav class="navbar top-navbar">
<div class="container-fluid">
<div class="navbar-left">
<div class="navbar-btn">
<a href="index.html"><img src="<?= base_url()?>assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"></a>
<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
</div>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
<i class="icon-envelope"></i>
<span class="notification-dot bg-green">4</span>
</a>
<ul class="dropdown-menu right_chat email vivify fadeIn">
<li class="header green">You have 4 New eMail</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-red"><span>FC</span></div>
<div class="media-body">
<span class="name">James Wert <small class="float-right text-muted">Just now</small></span>
<span class="message">Update GitHub</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
<div class="media-body">
<span class="name">Folisise Chosielie <small class="float-right text-muted">12min ago</small></span>
<span class="message">New Messages</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="<?= base_url()?>assets/images/xs/avatar5.jpg" alt>
<div class="media-body">
<span class="name">Louis Henry <small class="float-right text-muted">38min ago</small></span>
<span class="message">Design bug fix</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media mb-0">
<img class="media-object " src="<?= base_url()?>assets/images/xs/avatar2.jpg" alt>
<div class="media-body">
<span class="name">Debra Stewart <small class="float-right text-muted">2hr ago</small></span>
<span class="message">Fix Bug</span>
</div>
</div>
</a>
</li>
</ul>
</li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
<i class="icon-bell"></i>
<span class="notification-dot bg-azura">4</span>
</a>
<ul class="dropdown-menu feeds_widget vivify fadeIn">
<li class="header blue">You have 4 New Notifications</li>
<li>
<a href="javascript:void(0);">
<div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
<div class="feeds-body">
<h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
<small>WE have fix all Design bug with Responsive</small>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
<div class="feeds-body">
<h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
<small>I feel great! Thanks team</small>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
<div class="feeds-body">
<h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
<small>Your connection is not private</small>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
<div class="feeds-body">
<h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
<small>It will give a smart finishing to your site</small>
</div>
</a>
</li>
</ul>
</li>
<li class="dropdown language-menu">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
<i class="fa fa-language"></i>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item pt-2 pb-2" href="#"><img src="https://nsdbytes.com/template/oculux/assets/images/flag/us.svg" class="w20 mr-2 rounded-circle"> US English</a>
<a class="dropdown-item pt-2 pb-2" href="#"><img src="https://nsdbytes.com/template/oculux/assets/images/flag/gb.svg" class="w20 mr-2 rounded-circle"> UK English</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item pt-2 pb-2" href="#"><img src="https://nsdbytes.com/template/oculux/assets/images/flag/russia.svg" class="w20 mr-2 rounded-circle"> Russian</a>
<a class="dropdown-item pt-2 pb-2" href="#"><img src="https://nsdbytes.com/template/oculux/assets/images/flag/arabia.svg" class="w20 mr-2 rounded-circle"> Arabic</a>
<a class="dropdown-item pt-2 pb-2" href="#"><img src="https://nsdbytes.com/template/oculux/assets/images/flag/france.svg" class="w20 mr-2 rounded-circle"> French</a>
</div>
</li>
<li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">Mega</a></li>
<li class="p_social"><a href="page-social.html" class="social icon-menu" title="News">Social</a></li>
<li class="p_news"><a href="page-news.html" class="news icon-menu" title="News">News</a></li>
<li class="p_blog"><a href="page-blog.html" class="blog icon-menu" title="Blog">Blog</a></li>
</ul>
</div>
<div class="navbar-right">
<div id="navbar-menu">
<ul class="nav navbar-nav">
<li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>
<li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>
<li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
<div class="search_div">
<div class="card">
<div class="body">
<form id="navbar-search" class="navbar-form search-form">
<div class="input-group mb-0">
<input type="text" class="form-control" placeholder="Search...">
<div class="input-group-append">
<span class="input-group-text"><i class="icon-magnifier"></i></span>
<a href="javascript:void(0);" class="search_toggle btn btn-danger"><i class="icon-close"></i></a>
</div>
</div>
</form>
</div>
</div>
<span>Search Result <small class="float-right text-muted">About 90 results (0.47 seconds)</small></span>
<div class="table-responsive">
<table class="table table-hover table-custom spacing5">
<tbody>
<tr>
<td class="w40">
<span>01</span>
</td>
<td>
<div class="d-flex align-items-center">
<div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title data-original-title="Avatar Name"><span>SS</span></div>
<div class="ml-3">
<a href="page-invoices-detail.html" title>South Shyanne</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70031f0504185e031809111e1e15301508111d001c155e131f1d">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>02</span>
</td>
<td>
<div class="d-flex align-items-center">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
<div class="ml-3">
<a href="javascript:void(0);" title>Zoe Baker</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f25303a713d3e343a2d1f3a273e322f333a713c3032">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>03</span>
</td>
<td>
<div class="d-flex align-items-center">
<div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title data-original-title="Avatar Name"><span>CB</span></div>
<div class="ml-3">
<a href="javascript:void(0);" title>Colin Brown</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d6e626164636f7f627a634d68756c607d6168236e6260">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>04</span>
</td>
<td>
<div class="d-flex align-items-center">
<div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title data-original-title="Avatar Name"><span>KG</span></div>
<div class="ml-3">
<a href="javascript:void(0);" title>Kevin Gill</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="402b2536292e6e27292c2c002538212d302c256e232f2d">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>05</span>
</td>
<td>
<div class="d-flex align-items-center">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
<div class="ml-3">
<a href="javascript:void(0);" title>Brandon Smith</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d994b8abb0b8f7beb0b5b599bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>06</span>
</td>
<td>
<div class="d-flex align-items-center">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
<div class="ml-3">
<a href="javascript:void(0);" title>Kevin Baker</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abc0ceddc2c585c9cac0ced9ebced3cac6dbc7ce85c8c4c6">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
<tr>
<td>
<span>07</span>
</td>
<td>
<div class="d-flex align-items-center">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
<div class="ml-3">
<a href="javascript:void(0);" title>Zoe Baker</a>
<p class="mb-0"><a href="https://nsdbytes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="265c49430844474d435466435e474b564a430845494b">[email&#160;protected]</a></p>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div id="megamenu" class="megamenu particles_js">
<a href="javascript:void(0);" class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></a>
<div class="container">
<div class="row clearfix">
<div class="col-12">
<ul class="q_links">
<li><a href="app-inbox.html"><i class="icon-envelope"></i><span>Inbox</span></a></li>
<li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
<li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Event</span></a></li>
<li><a href="page-profile.html"><i class="icon-user"></i><span>Profile</span></a></li>
<li><a href="page-invoices.html"><i class="icon-printer"></i><span>Invoice</span></a></li>
<li><a href="page-timeline.html"><i class="icon-list"></i><span>Timeline</span></a></li>
</ul>
</div>
<div class="col-md-4 col-sm-12">
<div class="card w_card3">
<div class="body">
<div class="text-center"><i class="icon-picture text-info"></i>
<h4 class="m-t-25 mb-0">104 Picture</h4>
<p>Your gallery download complete</p>
<a href="javascript:void(0);" class="btn btn-info btn-round">Download now</a>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="card w_card3">
<div class="body">
<div class="text-center"><i class="icon-diamond text-success"></i>
<h4 class="m-t-25 mb-0">813 Point</h4>
<p>You are doing great job!</p>
<a href="javascript:void(0);" class="btn btn-success btn-round">Read now</a>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="card w_card3">
<div class="body">
<div class="text-center"><i class="icon-social-twitter text-primary"></i>
<h4 class="m-t-25 mb-0">3,756</h4>
<p>New Followers on Twitter</p>
<a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
</div>
</div>
</div>
</div>
<div class="col-12">
<ul class="list-group">
<li class="list-group-item">
Anyone send me a message
<div class="float-right">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
</div>
</li>
<li class="list-group-item">
Anyone seeing my profile page
<div class="float-right">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
</div>
</li>
<li class="list-group-item">
Anyone posts a comment on my post
<div class="float-right">
<label class="switch">
<input type="checkbox">
<span class="slider round"></span>
</label>
</div>
</li>
</ul>
</div>
</div>
</div>
<div id="particles-js"></div>
</div>
<div id="rightbar" class="rightbar">
<div class="body">
<ul class="nav nav-tabs2">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Chat-one">Chat</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-list">List</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-groups">Groups</a></li>
</ul>
<hr>
<div class="tab-content">
<div class="tab-pane vivify fadeIn delay-100 active" id="Chat-one">
<div class="slim_scroll">
<div class="chat_detail">
<ul class="chat-widget clearfix">
<li class="left float-left">
<div class="avtar-pic w35 bg-pink"><span>KG</span></div>
<div class="chat-info">
<span class="message">Hello, John<br>What is the update on Project X?</span>
</div>
</li>
<li class="right">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar1.jpg" class="rounded" alt>
<div class="chat-info">
<span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
</div>
</li>
<li class="left float-left">
<div class="avtar-pic w35 bg-pink"><span>KG</span></div>
<div class="chat-info">
<span class="message">That's great. Will catch you in evening.</span>
</div>
</li>
<li class="right">
<img src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar1.jpg" class="rounded" alt>
<div class="chat-info">
<span class="message">Sure we'will have a blast today.</span>
</div>
</li>
</ul>
<div class="input-group p-t-15">
<textarea rows="3" class="form-control" placeholder="Enter text here..."></textarea>
</div>
</div>
</div>
</div>
<div class="tab-pane vvivify fadeIn delay-100" id="Chat-list">
<ul class="right_chat list-unstyled mb-0">
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-red"><span>FC</span></div>
<div class="media-body">
<span class="name">Folisise Chosielie</span>
<span class="message">offline</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar3.jpg" alt>
<div class="media-body">
<span class="name">Marshall Nichols</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-red"><span>FC</span></div>
<div class="media-body">
<span class="name">Louis Henry</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-orange"><span>DS</span></div>
<div class="media-body">
<span class="name">Debra Stewart</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-green"><span>SW</span></div>
<div class="media-body">
<span class="name">Lisa Garett</span>
<span class="message">offline since May 12</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar5.jpg" alt>
<div class="media-body">
<span class="name">Debra Stewart</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="https://nsdbytes.com/template/oculux/assets/images/xs/avatar2.jpg" alt>
<div class="media-body">
<span class="name">Lisa Garett</span>
<span class="message">offline since Jan 18</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
<div class="media-body">
<span class="name">Louis Henry</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-pink"><span>DS</span></div>
<div class="media-body">
<span class="name">Debra Stewart</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-info"><span>SW</span></div>
<div class="media-body">
<span class="name">Lisa Garett</span>
<span class="message">offline since May 12</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane vivify fadeIn delay-100" id="Chat-groups">
<ul class="right_chat list-unstyled mb-0">
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-cyan"><span>DT</span></div>
<div class="media-body">
<span class="name">Designer Team</span>
<span class="message">offline</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-azura"><span>SG</span></div>
<div class="media-body">
<span class="name">Sale Groups</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-orange"><span>NF</span></div>
<div class="media-body">
<span class="name">New Fresher</span>
<span class="message">online</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<div class="avtar-pic w35 bg-indigo"><span>PL</span></div>
<div class="media-body">
<span class="name">Project Lead</span>
<span class="message">offline since May 12</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div id="left-sidebar" class="sidebar">
<div class="navbar-brand">
<a href="index.html"><img src="https://nsdbytes.com/template/oculux/assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
<button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
</div>
<div class="sidebar-scroll">
<div class="user-account">
<div class="user_div">
<img src="<?= base_url()?>assets/images/user.png" class="user-photo" alt="User Profile Picture">
</div>
<div class="dropdown">
<span>Welcome,</span>
<a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Louis Pierce</strong></a>
<ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
<li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
<li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
<li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
<li class="divider"></li>
<li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
</ul>
</div>
</div>
<nav id="left-sidebar-nav" class="sidebar-nav">
<ul id="main-menu" class="metismenu">
<li class="header">Main</li>
<li class="active open">
<a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>My Page</span></a>
<ul>
<li><a href="index.html">My Dashboard</a></li>
<li class="active"><a href="index4.html">Web Analytics</a></li>
<li><a href="index5.html">Event Monitoring</a></li>
<li><a href="index6.html">Finance Performance</a></li>
<li><a href="index7.html">Sales Monitoring</a></li>
<li><a href="https://nsdbytes.com/template/oculux/hospital/index.html">Hospital Management</a></li>
<li><a href="index9.html">Campaign Monitoring</a></li>
<li><a href="index10.html">University Analytics</a></li>
<li><a href="index11.html">eCommerce Analytics</a></li>
</ul>
</li>
<li><a href="index2.html"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
<li><a href="index3.html"><i class="icon-diamond"></i><span>Crypto Coin</span></a></li>
<li><a href="https://nsdbytes.com/template/oculux/hrms/index.html"><i class="icon-rocket"></i><span>HRMS System</span></a></li>
<li><a href="https://nsdbytes.com/template/oculux/jobportal/index.html"><i class="icon-badge"></i><span>Job Portal</span></a></li>
<li><a href="https://nsdbytes.com/template/oculux/landing/index.html"><i class="icon-cursor"></i><span>Landing Page</span></a></li>
<li class="header">App</li>
<li>
<a href="#Contact" class="has-arrow"><i class="icon-book-open"></i><span>Contact</span></a>
<ul>
<li><a href="app-contact.html">List View</a></li>
<li><a href="app-contact2.html">Grid View</a></li>
</ul>
</li>
<li><a href="app-inbox.html"><i class="icon-envelope"></i><span>Email</span></a></li>
<li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
<li>
<a href="#Project" class="has-arrow"><i class="icon-bubbles"></i><span>Project</span></a>
<ul>
<li><a href="app-taskboard.html">Taskboard</a></li>
<li><a href="app-project-list.html">Project list</a></li>
<li><a href="app-ticket.html">Ticket List</a></li>
<li><a href="app-ticket-details.html">Ticket Details</a></li>
<li><a href="app-clients.html">Clients</a></li>
<li><a href="app-todo.html">Todo List</a></li>
</ul>
</li>
<li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
<li class="header">UI Elements</li>
<li>
<a href="#uiIcons" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
<ul>
<li><a href="ui-icons.html">FontAwesome</a></li>
<li><a href="ui-icons-line.html">Simple Line</a></li>
<li><a href="ui-icons-themify.html">Themify Icon</a></li>
</ul>
</li>
<li>
<a href="#uiComponents" class="has-arrow"><i class="icon-diamond"></i><span>Components</span></a>
<ul>
<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
<li><a href="ui-typography.html">Typography</a></li>
<li><a href="ui-colors.html">Colors</a></li>
<li><a href="ui-buttons.html">Buttons</a></li>
<li><a href="ui-tabs.html">Tabs</a></li>
<li><a href="ui-progressbars.html">Progress Bars</a></li>
<li><a href="ui-modals.html">Modals</a></li>
<li><a href="ui-notifications.html">Notifications</a></li>
<li><a href="ui-dialogs.html">Dialogs</a></li>
<li><a href="ui-list-group.html">List Group</a></li>
<li><a href="ui-media-object.html">Media Object</a></li>
<li><a href="ui-nestable.html">Nestable</a></li>
<li><a href="ui-range-sliders.html">Range Sliders</a></li>
<li><a href="ui-helper-class.html">Helper Classes</a></li>
</ul>
</li>
<li>
<a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
<ul>
<li><a href="forms-basic.html">Basic Elements</a></li>
<li><a href="forms-advanced.html">Advanced Elements</a></li>
<li><a href="forms-validation.html">Form Validation</a></li>
<li><a href="forms-wizard.html">Form Wizard</a></li>
<li><a href="forms-summernote.html">Summernote</a></li>
<li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
<li><a href="forms-editors.html">CKEditor</a></li>
<li><a href="forms-markdown.html">Markdown</a></li>
<li><a href="forms-cropping.html">Image Cropping</a></li>
</ul>
</li>
<li>
<a href="#Tables" class="has-arrow"><i class="icon-layers"></i><span>Tables</span></a>
<ul>
<li><a href="table-normal.html">Normal Tables</a></li>
<li><a href="table-color.html">Tables Color</a></li>
<li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
<li><a href="table-editable.html">Editable Tables</a></li>
<li><a href="table-filter.html">Table Filter</a></li>
<li><a href="table-dragger.html">Table dragger</a></li>
</ul>
</li>
<li>
<a href="#charts" class="has-arrow"><i class="icon-pie-chart"></i><span>Charts</span></a>
<ul>
<li><a href="chart-apex.html">Apex Charts</a></li>
<li><a href="chart-c3.html">C3 Charts</a></li>
<li><a href="chart-chartjs.html">ChartJS</a></li>
<li><a href="chart-morris.html">Morris Charts</a></li>
<li><a href="chart-flot.html">Flot Charts</a></li>
<li><a href="chart-sparkline.html">Sparkline Chart</a></li>
<li><a href="chart-jquery-knob.html">Jquery Knob</a></li>
</ul>
</li>
<li><a href="map-jvectormap.html"><i class="icon-map"></i><span>jVector Map</span></a></li>
<li class="header">Extra</li>
<li><a href="widgets.html"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
<li>
<a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
<ul>
<li><a href="page-login.html">Login</a></li>
<li><a href="page-login2.html">Login Version2</a></li>
<li><a href="page-register.html">Register</a></li>
<li><a href="page-forgot-password.html">Forgot Password</a></li>
<li><a href="page-404.html">Page 404</a></li>
<li><a href="page-maintenance.html">Maintenance</a></li>
</ul>
</li>
<li>
<a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
<ul>
<li><a href="page-blank.html">Blank Page</a></li>
<li><a href="page-profile.html">User Profile</a></li>
<li><a href="page-user-list.html">User List</a></li>
<li><a href="page-testimonials.html">Testimonials</a></li>
<li><a href="page-invoices.html">Invoices</a></li>
<li><a href="page-timeline.html">Timeline</a></li>
<li><a href="page-search-results.html">Search Results</a></li>
<li><a href="page-gallery.html">Image Gallery</a></li>
<li><a href="page-pricing.html">Pricing</a></li>
<li><a href="page-coming-soon.html">Coming Soon</a></li>
</ul>
</li>
<li><a href="https://nsdbytes.com/template/oculux/documentation/index.html"><i class="icon-doc"></i><span>Documentation</span></a></li>
</ul>
</nav>
</div>
</div>
<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row clearfix">
<div class="col-md-6 col-sm-12">
<h1>Web Analytics</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Oculux</a></li>
<li class="breadcrumb-item"><a href="#">My page</a></li>
<li class="breadcrumb-item active" aria-current="page">Web Analytics</li>
</ol>
</nav>
</div>
<div class="col-md-6 col-sm-12 text-right hidden-xs">
<a class="p-1 text-green mr-3" href="#"><i class="fa fa-save mr-1"></i> Save Report</a>
<a class="p-1 text-red mr-3" href="#"><i class="fa fa-file-pdf-o mr-1"></i> Export to PDF</a>
<a class="p-1 text-blue" href="#"><i class="fa fa-envelope mr-1"></i>Send to Email</a>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="body w_summary">
<div class="c_know mt-1 mr-3">
<input type="text" class="knob" value="34" data-width="45" data-height="45" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
</div>
<div class="s_detail">
<h4 class="mb-0">34.80%</h4>
<span>% New Sessions</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="body w_summary">
<div class="s_chart">
<span class="chart">3,5,1,6,2,4,8,5,3,2</span>
</div>
<div class="s_detail">
<h4 class="mb-0">23.15%</h4>
<span>Bounce Rate</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="body w_summary">
<div class="c_know mt-1 mr-3">
<input type="text" class="knob" value="57" data-width="45" data-height="45" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
</div>
<div class="s_detail">
<h4 class="mb-0">1258</h4>
<span>Pages/Session</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="body w_summary">
<div class="s_chart">
<span class="chart">8,5,2,9,6,3,4,5,6,7</span>
</div>
<div class="s_detail">
<h4 class="mb-0">1025</h2>
<span>Sessions</span>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-sm-12">
<div class="card">
<div class="body">
<div class="d-flex justify-content-between align-items-center">
<div>
<h6 class="mb-0">Audience Metrics</h6>
</div>
<ul class="nav nav-tabs2">
<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#today">Today</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-week">Week</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-month">Month</a></li>
</ul>
</div>
<div class="row clearfix">
<div class="col-lg-4 col-md-12 col-sm-12">
<small>Audience It is a long established fact that a reader will be distracted</small>
<div class="d-flex justify-content-start mt-3">
<div class="mr-5">
<label class="mb-0">Users</label>
<h4>9,231</h4>
</div>
<div>
<label class="mb-0">Sessions</label>
<h4>10,850</h4>
</div>
</div>
<div id="chart-donut" style="height: 250px"></div>
</div>
<div class="col-lg-8 col-md-12 col-sm-12">
<div id="flotChart" class="flot-chart"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-xl-3 col-lg-4 col-md-">
<div class="card">
<div class="body">
<h6 class="mb-4 font300">Page Impressions</h6>
<h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
<small>The total number of Page Impressions within the date range</small>
<div id="chart-bar-stacked" style="height: 280px"></div>
</div>
</div>
</div>
<div class="col-xl-5 col-lg-4 col-md-6">
<div class="card">
<div class="body">
<h6 class="mb-4 font300">Sessions by Channel</h6>
<div class="d-flex justify-content-start">
<div class="mr-4">
<h3 class="mb-0 mt-3 font300">3,095</h3>
<small>Organic Search</small>
</div>
<div class="mr-4">
<h3 class="mb-0 mt-3 font300">2,763</h3>
<small>Referral</small>
</div>
<div>
<h3 class="mb-0 mt-3 font300">763</h3>
<small>Other</small>
</div>
</div>
<div id="chart-area-spline-sracked" style="height: 285px"></div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-12">
<div class="card w_card3">
<div class="body">
<div class="text-center"><i class="icon-picture text-info"></i>
<h4 class="m-t-25 mb-0">104 Picture</h4>
<p>Your gallery download complete</p>
<a href="javascript:void(0);" class="btn btn-info btn-round">Download now</a>
</div>
</div>
</div>
<div class="card w_card3">
<div class="body">
<div class="text-center"><i class="icon-social-twitter text-primary"></i>
<h4 class="m-t-25 mb-0">3,756</h4>
<p>New Followers on Twitter</p>
<a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-sm-12">
<div class="card">
<div class="header">
<h2>Visitor's Locations</h2>
<ul class="header-dropdown dropdown">
<li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu">
<li><a href="javascript:void(0);">Action</a></li>
<li><a href="javascript:void(0);">Another Action</a></li>
<li><a href="javascript:void(0);">Something else</a></li>
</ul>
</li>
</ul>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-4 col-md-12">
<ul class="nav nav-tabs3">
<li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#TODAY">TODAY</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#THIS-WEEK">WEEK</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#THIS-MONTH">MONTH</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active show" id="TODAY">
<div class="big-text">
<h2>831</h2>
</div>
<span>VISITORS OPERATING SYSTEM</span>
<hr>
<div class="form-group mb-4">
<label class="d-block">macOS <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Windows <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Linux <span class="float-right">23% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
</div>
</div>
<div class="form-group mb-0">
<label class="d-block">Ubuntu <span class="float-right">78% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
</div>
</div>
</div>
<div class="tab-pane" id="THIS-WEEK">
<div class="big-text">
<h2>1,580</h2>
</div>
<span>VISITORS OPERATING SYSTEM</span>
<hr>
<div class="form-group mb-4">
<label class="d-block">macOS <span class="float-right">62% <i class="fa fa-long-arrow-down"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-azura" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Windows <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Linux <span class="float-right">42% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;"></div>
</div>
</div>
<div class="form-group mb-0">
<label class="d-block">Ubuntu <span class="float-right">78% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
</div>
</div>
</div>
<div class="tab-pane" id="THIS-MONTH">
<div class="big-text">
<h2>4,305</h2>
</div>
<span>VISITORS OPERATING SYSTEM</span>
<hr>
<div class="form-group mb-4">
<label class="d-block">macOS <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Windows <span class="float-right">62% <i class="fa fa-long-arrow-up"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
</div>
</div>
<div class="form-group mb-4">
<label class="d-block">Linux <span class="float-right">11% <i class="fa fa-long-arrow-down"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
</div>
</div>
<div class="form-group mb-0">
<label class="d-block">Ubuntu <span class="float-right">31% <i class="fa fa-long-arrow-down"></i></span></label>
<div class="progress progress-xxs">
<div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div id="world-map-markers" class="v_locations jvector-map main-map"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="<?= base_url()?>assets/bundles/libscripts.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/vendorscripts.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/knob.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/c3.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/flotscripts.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/jvectormap.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/bundles/mainscripts.bundle.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/index4.js" type="text/javascript"></script>



</body>

</html>
