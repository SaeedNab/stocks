<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Superieur Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
      <link rel="stylesheet" href="/assets/admin/css/bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

      <!-- Bootstrap extend-->
      <link rel="stylesheet" href="/assets/admin/css/bootstrap-extend.css">

      <!-- theme style -->
      <link rel="stylesheet" href="/assets/admin/css/master_style_rtl.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/material-design-iconic-font/css/materialdesignicons.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/Ionicons/css/ionicons.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/themify-icons/themify-icons.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/linea-icons/linea.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/glyphicons/glyphicon.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/flag-icon/css/flag-icon.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/simple-line-icons-master/css/simple-line-icons.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/cryptocoins-master/webfont/cryptocoins.css">
      <link rel="stylesheet" href="/assets/admin/css/icons/animate/animate.css">
      <link rel="stylesheet" href="/assets/admin/css/master_style.css">
      <link rel="stylesheet" href="/assets/admin/css/_all-skins.css">

      <!-- daterange picker -->
      <link rel="stylesheet" href="/assets/admin/css/datarangepicker/daterangepicker.css">

      <!-- Morris charts -->
      <link rel="stylesheet" href="/assets/admin/css/morris/morris.css">

      <!-- Data Table-->
      <link rel="stylesheet" type="text/css" href="/assets/admin/css/datatables/datatables.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/sprites/css-sprite/sprite-action-black.min.css">


      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


  </head>

<body class="hold-transition skin-info-light sidebar-mini rtl">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.blade.php" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="/assets/admin/images/logo-dark.png" alt="logo"></span>
		  <span class="dark-logo"><img src="/assets/admin/images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><!--<img src="../images/logo-dark-text.png" alt="logo">--></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">
				  	<img src="../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> تنظیمات پروفایل</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> صندوق پیام</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> تغییر پسورد</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> خروج</a>
					<div class="dropdown-divider"></div>
              </li>
            </ul>
          </li>

          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

              <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">5 New</h3>
							<span class="font-light">Messages</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-email-alert"></i>
						</div>
					</div>
				</div>
			  </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
				  <a href="#" class="text-white bg-info">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">7 New</h3>
							<span class="font-light">Notifications</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-message-alert"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
            </ul>
          </li>
          <!-- Tasks-->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bulletin-board"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">6 New</h3>
							<span class="font-light">Tasks</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-bulletin-board"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="dashboard.blade.php">
			<img src="../images/avatar/7.jpg" alt="user">
              <span>
				<span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
				<span class="email-id">samuel@gmail.com</span>
			  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>تنظیمات پروفایل </a></li>
			<li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>صندوق پیام</a></li>
			<li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>تغییر پسورد</a></li>
          </ul>
        </li>

		<li class="treeview active">
          <a href="#">
            <i class="mdi mdi-view-dashboard"></i>

            <span style="font-family: iran">داشبورد</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dashboard.blade.php"><i class="mdi mdi-toggle-switch-off"></i>صفحه اصلی</a></li>
            <li><a href="index-2.html"><i class="mdi mdi-toggle-switch-off"></i>سر شاخه </a></li>
            <li><a href="index-3.html"><i class="mdi mdi-toggle-switch-off"></i>زیر مجموعه ها</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-tune-vertical"></i>
            <span style="font-family: iran">حسابداری</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="menu.html"><i class="mdi mdi-toggle-switch-off"></i>گردش حساب</a></li>
            <li><a href="taghaza.html"><i class="mdi mdi-toggle-switch-off"></i>گزارش واریز وجه  </a></li>
            <li><a href="gozaresh.html"><i class="mdi mdi-toggle-switch-off"></i>گزارش دریافت وجه  </a></li>
            <li><a href="https//idpay.ir/mohammadzedbazi"><i class="mdi mdi-toggle-switch-off"></i>واریز وجه  </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-tune-vertical"></i>
            <span style="font-family: iran">تراکنش</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/https//idpay.ir/mohammadzedbazi"><i class="mdi mdi-toggle-switch-off"></i>واریز وجه </a></li>
        <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>تقاضای وجه </a></li>

      </ul>
    </li>














		<li>
          <a href="pages/auth_login.html">
            <i class="mdi mdi-directions"></i>
			<span style="font-family: iran">خروج</span>
          </a>
        </li>

      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">داشبورد</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">صفحه اصلی</li>
						</ol>
					</nav>
				</div>
			</div>

		</div>
	</div>

    <!-- Main content -->
    <section class="content">
	  <div class="row">
		<div class="col-12 col-lg-6">
			<div class="row">
				<div class="col-12">
					<div class="box bg-img box-inverse" style="background-image: url(../images/gallery/full/10.jpg);" data-overlay="7">
						<div class="box-header with-border">
							<h4 class="box-title">آخرین وضعیت</h4>
							<ul class="box-controls pull-right">
							  <li><a class="box-btn-close" href="#"></a></li>

							</ul>
						</div>
						<div class="box-body mt-20">
							<!--<span class="badge" data-overlay="5">New</span>-->
							<!--<h2 class="font-weight-200 mb-0">Contrary to popular belief</h2>-->
						<!--<p>There are many variations of passages</p>-->
							<ul class="flexbox flex-justified mt-20">
								<li>
								  <p class="font-size-20 text-success mb-0 font-weight-300"> <i class="fa fa-caret-up text-success"></i> +1.92%
									  <small class="font-size-12">41,425.81</small></p>

								</li>

								<li>
								  <p class="font-size-20 text-danger mb-0 font-weight-300"> <i class="fa fa-caret-down text-danger"></i> -0.92%
									  <small class="font-size-12">54,425.81</small></p>

								</li>

								<li>
								  <p class="font-size-20 text-success mb-0 font-weight-300"> <i class="fa fa-caret-up text-success"></i> +1.12%
									  <small class="font-size-12">85,425.81</small></p>

								</li>
							</ul>
						</div>
					</div>
				</div>
<!--				<div class="col-md-6 col-12">-->
<!--					<div class="box box-body">-->
<!--					  <h6 class="mb-30">-->
<!--						<span class="text-uppercase">Revenue</span>-->
<!--						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>-->
<!--					  </h6>-->
<!--					  -->
<!--					  <p class="font-size-26">$845,1258</p>-->

<!--					  <div class="progress progress-xxs mt-0 mb-10">-->
<!--						<div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--					  </div>-->
<!--					  <div class="font-size-12"><i class="ion-arrow-graph-down-right text-success mr-1"></i> %18 decrease from last month</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-md-6 col-12">-->
<!--					<div class="box box-body">-->
<!--					  <h6 class="mb-30">-->
<!--						<span class="text-uppercase">SELLS</span>-->
<!--						<span class="float-right"><a class="btn btn-xs btn-primary" href="#">View</a></span>-->
<!--					  </h6>-->
<!--					  -->
<!--					  <p class="font-size-26">15,958</p>-->

<!--					  <div class="progress progress-xxs mt-0 mb-10">-->
<!--						<div class="progress-bar bg-success" role="progressbar" style="width: 75%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--					  </div>-->
<!--					  <div class="font-size-12"><i class="ion-arrow-graph-up-right text-success mr-1"></i> 12548 more than last year</div>-->
<!--					</div>-->
<!--				</div>-->
			</div>

		</div>

		<div class="col-12 col-lg-6">
			<div class="box">
				<div class="box-inverse bg-danger bg-bubbles-dark">
            	<div class="box-header no-border">
					<h4>موجودی کل</h4>

            	</div>
				<div class="box-body pb-60">
					<h1 class="text-center font-size-50"><small>ریال</small>100,000,000</h1>
				</div>
				</div>
				<div class="box-body">
					<div class="text-center py-10 bb-1 bb-dashed">
					   <h4>در آمد ماهانه</h4>
					   <ul class="flexbox flex-justified text-center my-20">
						<li class="px-10">
						  <h6 class="mb-0 text-bold">8952</h6>
						  <small>فروردین</small>
						</li>

						<li class="br-1 bl-1 px-10">
						  <h6 class="mb-0 text-bold">7458</h6>
						  <small>اردیبهشت</small>
						</li>

						<li class="px-10">
						  <h6 class="mb-0 text-bold">3254</h6>
						  <small>خرداد</small>
						</li>
					  </ul>
					</div>
					<div class="text-center py-10 bb-1 bb-dashed">
					  <ul class="flexbox flex-justified text-center my-20">
						<li class="px-10">
						  <h6 class="mb-0 text-bold">8952</h6>
						  <small>تیر</small>
						</li>

						<li class="br-1 bl-1 px-10">
						  <h6 class="mb-0 text-bold">7458</h6>
						  <small>مرداد</small>
						</li>

						<li class="px-10">
						  <h6 class="mb-0 text-bold">3254</h6>
						  <small>شهریور</small>
						</li>
					  </ul>
					</div>
				</div>
			</div>
		</div>

<!--		<div class="col-12 col-lg-2">-->
<!--			  <div class="box">-->
<!--				  <div class="box-body">-->
<!--					<div class="flexbox">-->
<!--					  <h5>Overdue</h5>-->
<!--					  <div class="dropdown">-->
<!--						<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>-->
<!--						<div class="dropdown-menu dropdown-menu-right">-->
<!--						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>-->
<!--						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>-->
<!--						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>-->
<!--						</div>-->
<!--					  </div>-->
<!--					</div>-->

<!--					<div class="text-center my-2">-->
<!--					  <div class="font-size-60">185</div>-->
<!--					  <span>Tasks</span>-->
<!--					</div>-->
<!--				  </div>-->

<!--				  <div class="box-body bg-gray-light py-20">-->
<!--					<span class="text-muted mr-1">Overdue:</span>-->
<!--					<span class="text-dark">45</span>-->
<!--				  </div>-->

<!--				  <div class="progress progress-sm mt-0 mb-0">-->
<!--					<div class="progress-bar bg-info-gradient-animet" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--				  </div>-->
<!--				</div>-->
<!--			<div class="box bg-primary">-->

<!--              <div class="progress progress-sm mt-0 mb-0">-->
<!--                <div class="progress-bar bg-primary-gradient-animet" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--              </div>-->

<!--              <div class="card-body bg-gray-light py-20">-->
<!--                <span class="text-muted mr-1">Completed:</span>-->
<!--                <span class="text-dark">125</span>-->
<!--              </div>-->
<!--				-->
<!--              <div class="box-body">-->
<!--                <div class="flexbox pull-right">-->
<!--                  <div class="dropdown">-->
<!--                    <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>-->
<!--                    <div class="dropdown-menu dropdown-menu-right">-->
<!--                      <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>-->
<!--                      <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>-->
<!--                      <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->

<!--                <div class="text-center pb-5 mb-1">-->
<!--                  <h5 class="m-0">Tasks</h5>-->
<!--                  <div class="font-size-60 text-white">425</div>-->
<!--                  <span class="text-white">Due Tasks</span>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--		  </div>-->
      </div>

      <div class="row">

<!--		<div class="col-lg-4 col-12">-->
<!--		  &lt;!&ndash; Default box &ndash;&gt;-->
<!--		  <div class="box">-->
<!--			<div class="box-header with-border">-->
<!--			  <h4 class="box-title">Tasks</h4>-->

<!--			  <ul class="box-controls pull-right">-->
<!--				<li><a class="box-btn-close" href="#"></a></li>-->
<!--				<li><a class="box-btn-slide" href="#"></a></li>	-->
<!--				<li><a class="box-btn-fullscreen" href="#"></a></li>-->
<!--			  </ul>-->
<!--			</div>-->
<!--			<div class="box-body p-0">-->
<!--			  <ul class="todo-list">-->
<!--				<li class="p-15">-->
<!--				  <div class="box p-15 mb-0 d-block bb-2 border-danger">-->
<!--					 &lt;!&ndash; drag handle &ndash;&gt;-->
<!--					  <span class="handle">-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--					  </span>-->
<!--					  &lt;!&ndash; checkbox &ndash;&gt;-->
<!--					  <input type="checkbox" id="basic_checkbox_22" class="filled-in">-->
<!--					  <label for="basic_checkbox_22" class="mb-0 h-15 ml-15"></label>-->
<!--					  <span class="pull-right badge badge-danger">Urgent</span>-->
<!--					  <span class="font-size-18 text-line"><a href="">Nulla vitae purus</a> </span>-->
<!--					  <ul class="list-inline mb-0 mt-15 ml-30">-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">-->
<!--								<img src="../images/avatar/1.jpg" alt="img" class="avatar avatar-sm">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">-->
<!--								<i class="mdi mdi-format-align-left"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">-->
<!--								<i class="mdi mdi-comment"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--					  </ul>-->
<!--				  </div>-->
<!--				</li>-->
<!--				<li class="p-15">-->
<!--				  <div class="box p-15 mb-0 d-block bb-2 border-warning">-->
<!--					 &lt;!&ndash; drag handle &ndash;&gt;-->
<!--					  <span class="handle">-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--					  </span>-->
<!--					  &lt;!&ndash; checkbox &ndash;&gt;-->
<!--					  <input type="checkbox" id="basic_checkbox_23" class="filled-in">-->
<!--					  <label for="basic_checkbox_23" class="mb-0 h-15 ml-15"></label>-->
<!--					  <span class="pull-right badge badge-warning">High</span>-->
<!--					  <span class="font-size-18 text-line"><a href="">Maecenas scelerisque</a> </span>-->
<!--					  <ul class="list-inline mb-0 mt-15 ml-30">-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">-->
<!--								<img src="../images/avatar/2.jpg" alt="img" class="avatar avatar-sm">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">-->
<!--								<i class="mdi mdi-format-align-left"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">-->
<!--								<i class="mdi mdi-comment"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--					  </ul>-->
<!--				  </div>-->
<!--				</li>-->
<!--				<li class="p-15">-->
<!--				  <div class="box p-15 mb-0 d-block bb-2 border-secondary">-->
<!--					 &lt;!&ndash; drag handle &ndash;&gt;-->
<!--					  <span class="handle">-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--					  </span>-->
<!--					  &lt;!&ndash; checkbox &ndash;&gt;-->
<!--					  <input type="checkbox" id="basic_checkbox_24" class="filled-in">-->
<!--					  <label for="basic_checkbox_24" class="mb-0 h-15 ml-15"></label>-->
<!--					  <span class="font-size-18 text-line"><a href="">Vivamus nec orci</a> </span>-->
<!--					  <ul class="list-inline mb-0 mt-15 ml-30">-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">-->
<!--								<img src="../images/avatar/3.jpg" alt="img" class="avatar avatar-sm">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">-->
<!--								<i class="mdi mdi-format-align-left"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">-->
<!--								<i class="mdi mdi-comment"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--					  </ul>-->
<!--				  </div>-->
<!--				</li>-->
<!--				<li class="p-15">-->
<!--				  <div class="box p-15 mb-0 d-block bb-2 border-info">-->
<!--					 &lt;!&ndash; drag handle &ndash;&gt;-->
<!--					  <span class="handle">-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--						<i class="fa fa-ellipsis-v"></i>-->
<!--					  </span>-->
<!--					  &lt;!&ndash; checkbox &ndash;&gt;-->
<!--					  <input type="checkbox" id="basic_checkbox_25" class="filled-in">-->
<!--					  <label for="basic_checkbox_25" class="mb-0 h-15 ml-15"></label>-->
<!--					  <span class="font-size-18 text-line"><a href="">Nulla vitae purus</a> </span>-->
<!--					  <ul class="list-inline mb-0 mt-15 ml-30">-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="Username">-->
<!--								<img src="../images/avatar/4.jpg" alt="img" class="avatar avatar-sm">-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="5 Tasks">-->
<!--								<i class="mdi mdi-format-align-left"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="" data-toggle="tooltip" data-container="body" title="" data-original-title="3 Comments">-->
<!--								<i class="mdi mdi-comment"></i>-->
<!--							</a>-->
<!--						</li>-->
<!--					  </ul>-->
<!--				  </div>-->
<!--				</li>-->
<!--				-->
<!--			  </ul>-->
<!--			</div>-->
<!--			&lt;!&ndash; /.box-body &ndash;&gt;-->
<!--		  </div>-->
<!--		  &lt;!&ndash; /.box &ndash;&gt;-->
<!--		</div>	-->

        <div class="col-12 col-lg-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">آمار</h4>

              <ul class="box-controls pull-right">
			  	<li><a class="box-btn-close" href="#"></a></li>
			  	<li><a class="box-btn-slide" href="#"></a></li>
			  	<li><a class="box-btn-fullscreen" href="#"></a></li>
			  </ul>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 472px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


		<div class="col-12 col-lg-5">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">تجزیه و تحلیل فروش</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
			  <ul class="flexbox flex-justified text-center my-10">
					<li>
					  <p class="mb-0">Traffic</p>
					  <div class="font-size-20 mb-5">4854,22k</div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+18%</span>
					  </div>
					</li>

					<li class="br-1 bl-1">
					  <p class="mb-0">Orders</p>
					  <div class="font-size-20 mb-5">854,512k</div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+9%</span>
					  </div>
					</li>

					<li>
					  <p class="mb-0">Revenue</p>
					  <div class="font-size-20 mb-5">4875,84k</div>
					  <div class="font-size-18 text-danger">
					  	<i class="fa fa-arrow-down pr-5"></i><span>-8%</span>
					  </div>
					</li>
				</ul>
              <div class="chart-responsive">
                <div class="chart" id="bar-chart" style="height: 476px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

		<div class="col-lg-7 col-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h4 class="box-title">لیست بازار</h4>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>سهام</th>
							<th>جزییات</th>
							<th>مبلغ</th>
							<th>وضعیت</th>
							<th>موضوع</th>
							<th>بازدید</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>#5010</td>
							<td>Lorem Ipsum</td>
							<td>$548</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>15-Jan</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5011</td>
							<td>Lorem Ipsum</td>
							<td>$548</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>15-Sep</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5012</td>
							<td>Lorem Ipsum</td>
							<td>$9658</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>15-Jun</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5013</td>
							<td>Lorem Ipsum</td>
							<td>$4587</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>15-May</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5014</td>
							<td>Lorem Ipsum</td>
							<td>$856</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>15-Mar</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5015</td>
							<td>Lorem Ipsum</td>
							<td>$956</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>15-Aug</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5016</td>
							<td>Lorem Ipsum</td>
							<td>$745</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>15-Aug</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5013</td>
							<td>Lorem Ipsum</td>
							<td>$4587</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>15-May</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5014</td>
							<td>Lorem Ipsum</td>
							<td>$856</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>15-Mar</td>
							<td>
								<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>

      </div>
      <!-- /.row -->
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">

	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <!--<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>-->
      <!--<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">General</a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-info"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>-->
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



	<!-- jQuery 3 -->
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="../assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>

	<!-- popper -->
<script src="/assets/admin/js/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="/assets/admin/js/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="/assets/admin/js/popper/popper.min.js"></script>

<!-- date-range-picker -->
<script src="/assets/admin/js/moment/moment.min.js"></script>
<script src="/assets/admin/js/datarangepicker/daterangepicker.js"></script>

<!-- Bootstrap 4.0-->
<script src="/assets/admin/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="/assets/admin/js/chartjs/Chart.min.js"></script>

<!-- Slimscroll -->
<script src="/assets/admin/js/slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="/assets/admin/js/fastclick/fastclick.js"></script>

<!-- Morris.js charts -->
<script src="/assets/admin/js/raphael/raphael.min.js"></script>
<script src="/assets/admin/js/morris/morris.min.js"></script>

<!-- This is data table -->
<script src="/assets/admin/js/datatables/datatables.min.js"></script>

<!-- Superieur Admin App -->
<script src="/assets/admin/js/template.js"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="/assets/admin/js/dashboard.js"></script>

<!-- Superieur Admin for demo purposes -->
<script src="/assets/admin/js/demo.js"></script>



</body>
</html>
