
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Ovio -  Bootstrap Based Responsive Dashboard &amp; Admin Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Template style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="dist/weather/weather-icons.min.css">
<link type="text/css" rel="stylesheet" href="dist/weather/weather-icons-wind.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="plugins/charts/code/highcharts.js"></script>
</head>

<body class="sidebar-mini">
<div class="wrapper"> 
  
  <!-- Main Header -->
  <header class="main-header dark-bg"> 
    
    <!-- Logo --> 
    <a href="/" class="logo dark-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="/logo.png" style="width: 50px;padding: 5px;padding-bottom: 10px" alt="nToken Pay"></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="/logo.png" style="width: 50px;padding: 5px;padding-bottom: 10px" alt="nToken Pay"></span> </a> 
    
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation"> 
      <!-- Sidebar toggle button--> 
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="https://secure.gravatar.com/avatar/{{ md5('akif@rabbani.my') }}?s=160" class="user-image" alt="User Image"> <span class="hidden-xs">Florence Douglas</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="https://secure.gravatar.com/avatar/{{ md5('akif@rabbani.my') }}?s=160" class="img-responsive" alt="User"></div>
                <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                <div class="view-link text-left"><a href="#">View Profile</a> </div>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar dark-bg">
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header dark-bg">Menu</li>
        <li class="treeview active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu ">
            <li class="active"><a href="index.html"><i class="fa fa-angle-right"></i> Dashboard 1</a></li>
            <li><a href="dashboard-2.html"><i class="fa fa-angle-right"></i> Dashboard 2</a></li>
            <li><a href="dashboard-3.html"><i class="fa fa-angle-right"></i> Dashboard 3</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Templates</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-angle-right"></i> Default</a></li>
            <li><a href="index-light.html"><i class="fa fa-angle-right"></i> Light</a></li>
            <li><a href="index-dark.html"><i class="fa fa-angle-right"></i> Dark</a></li>
            <li><a href="index-collapsed-sidebar.html"><i class="fa fa-angle-right"></i> Collapsed Sidebar</a></li>
            <li><a href="index-boxed.html"><i class="fa fa-angle-right"></i> Boxed</a></li>
            <li><a href="index-top-nav.html"><i class="fa fa-angle-right"></i> Top Navigation</a></li>
            <li><a href="index-rtl.html"><i class="fa fa-angle-right"></i> RTL</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bullseye"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="app/project-summary.html"><i class="fa fa-angle-right"></i> Project Summary</a></li>
            <li><a href="app/invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
            <li><a href="app/calendar.html"><i class="fa fa-angle-right"></i> Calendar</a></li>
            
            <li><a href="app/gallery.html"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li><a href="app/timeline.html"><i class="fa fa-angle-right"></i> Timeline</a></li>
            <li><a href="app/contacts.html"><i class="fa fa-angle-right"></i> Contacts</a></li>
          </ul>
        </li>
        <li> <a href="widgets.html"> <i class="fa fa-th"></i> <span>Widgets</span></a> </li>
        <li class="header dark-bg">Components</li>
        <li class="treeview"> <a href="#"><i class="fa fa-briefcase"></i> <span>UI Components</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="component/alerts.html"><i class="fa fa-angle-right"></i> Alerts</a></li>
            <li><a href="component/buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
            <li><a href="component/carousel.html"><i class="fa fa-angle-right"></i> Carousel</a></li>
            <li><a href="component/collapse.html"><i class="fa fa-angle-right"></i> Collapse</a></li>
            <li><a href="component/listgroup.html"><i class="fa fa-angle-right"></i> List Group</a></li>
            <li><a href="component/pagination.html"><i class="fa fa-angle-right"></i> Pagination</a></li>
            <li><a href="component/tabs.html"><i class="fa fa-angle-right"></i> Tabs</a></li>
            <li><a href="component/tooltips.html"><i class="fa fa-angle-right"></i> Tooltips</a></li>
            <li><a href="component/popovers.html"><i class="fa fa-angle-right"></i> Popovers</a></li>
            <li><a href="component/progress.html"><i class="fa fa-angle-right"></i> Progress</a></li>
            <li><a href="component/mediaobjects.html"><i class="fa fa-angle-right"></i> Media Objects</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Forms</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="forms/general-elements.html"><i class="fa fa-angle-right"></i> General Elements</a></li>
            <li><a href="forms/layouts.html"><i class="fa fa-angle-right"></i> Form Layouts</a></li>
            <li><a href="forms/validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
            <li><a href="forms/wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
            
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="tables/basic.html"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
            <li><a href="tables/data.html"><i class="fa fa-angle-right"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-bar-chart"></i> <span>Charts</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="charts/line.html"><i class="fa fa-angle-right"></i> Line Charts</a></li>
            <li><a href="charts/area.html"><i class="fa fa-angle-right"></i> Area Charts</a></li>
            <li><a href="charts/bar.html"><i class="fa fa-angle-right"></i> Bar Charts</a></li>
            <li><a href="charts/pie.html"><i class="fa fa-angle-right"></i> Pie Charts</a></li>
            <li><a href="charts/bubble.html"><i class="fa fa-angle-right"></i> Bubble Charts</a></li>
            <li><a href="charts/combinations.html"><i class="fa fa-angle-right"></i> Combinations</a></li>
            <li><a href="charts/3d.html"><i class="fa fa-angle-right"></i> 3D Charts</a></li>
            
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="maps/google-maps.html"><i class="fa fa-angle-right"></i> Google Maps</a></li>
            <li><a href="maps/vector-map.html"><i class="fa fa-angle-right"></i> Vector Map</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"><i class="fa fa-files-o"></i> <span>Pages</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages/login.html"><i class="fa fa-angle-right"></i> Login</a></li>
            <li><a href="pages/register.html"><i class="fa fa-angle-right"></i> Register</a></li>
            <li><a href="pages/forgot-password.html"><i class="fa fa-angle-right"></i> Forgot password</a></li>
            <li><a href="pages/coming-soon.html"><i class="fa fa-angle-right"></i> Coming Soon</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-align-left"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                  <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar-menu --> 
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
  @yield('content')
  </div>
  <!-- content-wrapper --> 
  
  <!-- Main Footer -->
  <footer class="main-footer dark-bg">
    nToken Community</footer>
</div>
<!-- wrapper --> 

<!-- jQuery --> 
<script src="dist/js/jquery.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="dist/js/ovio.js"></script> 

<!-- charts --> 
<script src="plugins/charts/code/modules/exporting.js"></script> 
<script src="plugins/charts/chart-functions.js"></script>
</body>
</html>
