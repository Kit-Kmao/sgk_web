
<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Admin Templates & Dashboard UI Kits">
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="img/sgkLogo.png" />

		<!-- Title -->
		<title>Dashboard</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{asset('backend/fonts/style.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('css/main.min.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
        <link rel="stylesheet" href="{{asset('backend/vendor/daterange/daterange.css')}}">

		<!-- Chartist css -->
        <link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist-custom.css')}}">

		<!-- Calendar css -->
        <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
        @yield('ccs');
	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="img/sgkLogo.png" alt="Bootstrap Admin Dashboard" />
					</a>
					<a href="index.html" class="logo-sm">
						<img src="img/sgkLogo" alt="Bootstrap Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">General</li>
							<li class="">
								<a href="{{url('admin/')}}">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<i class="icon-message-circle"></i>
									<span class="menu-text">Messenger</span>
								</a>
							</li>
							<li>
								<a href="slideshow.html">
									<i class="icon-burst_mode"></i>
									<span class="menu-text">SlideShow</span>
								</a>
							</li>
							<li>
								<a href="page.html">
									<i class="icon-assignment"></i>
									<span class="menu-text">Pages</span>
								</a>
							</li>
							<li>
								<a href="activity.html">
									<i class="icon-timeline"></i>
									<span class="menu-text">Activity</span>
								</a>
							</li>
							<li>
								<a href="course.html">
									<i class="icon-school"></i>
									<span class="menu-text">Course</span>
								</a>
							</li>
							<li>
								<a href="about us.html">
									<i class="icon-people_outline"></i>
									<span class="menu-text">About Us</span>
								</a>
							</li>
							<li>
								<a href="teacher.html">
									<i class="icon-local_library"></i>
									<span class="menu-text">Teacher</span>
								</a>
							</li>
							<li>
								<a href="news.html">
									<i class="icon-layers"></i>
									<span class="menu-text">event</span>
								</a>
							</li>
							<li>
								<a href="review.html">
									<i class="icon-assignment"></i>
									<span class="menu-text">Review</span>
								</a>
							</li>
							<li>
								<a href="gallery.html">
									<i class="icon-photo_size_select_actual"></i>
									<span class="menu-text">Gallery</span>
								</a>
							</li>
							<li>
								<a href="infomation.html">
									<i class="icon-info"></i>
									<span class="menu-text">Information</span>
								</a>
							</li>
							<li>
								<a href="social media.html">
									<i class="icon-globe"></i>
									<span class="menu-text">Social Media</span>
								</a>
							</li>
							<li>
								<a href="category.html">
									<i class="icon-sound-mix"></i>
									<span class="menu-text">Category</span>
								</a>
							</li>
							
							<li>
								<a href="menu.html">
									<i class="icon-dehaze"></i>
									<span class="menu-text">Menu</span>
								</a>
							</li>
							{{-- <li>
								<a href="{{url('user/')}}">
									<i class="icon-users"></i>
									<span class="menu-text">Users</span>
								</a>
							</li>
							
							<li>
								<a href="setting.html">
									<i class="icon-cog"></i>
									<span class="menu-text">Settings</span>
								</a>
							</li> --}}
							
							
							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-cog"></i>
									<span class="menu-text">Settings</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="{{route('user.index')}}">Users</a>
										</li>
										<li>
											<a href="">Forgot Password</a>
										</li>
										<li>
											<a href="">My Profile</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">
               
                   <!-- Header start -->
                <header class="header">
                    <div class="toggle-btns">
                        <a id="toggle-sidebar" href="#">
                            <i class="icon-list"></i>
                        </a>
                        <a id="pin-sidebar" href="#">
                            <i class="icon-list"></i>
                        </a>
                    </div>
                    <!-- <div class="img_logo">
                        <img src="img/Logog.png"/>
                    </div> -->
                    <div class="header-items">

                        <!-- Header actions start -->
                        <ul class="header-actions">
                            
                            <li class="dropdown">
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-bell"></i>
                                    <span class="count-label">8</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                                    <div class="dropdown-menu-header">
                                        Notifications (40)
                                    </div>
                                    <ul class="header-notifications">
                                        <li>
                                            <a href="#">
                                                <div class="user-img away">
                                                    <img src="img/user10.png" alt="Bootstrap Admin Panel">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Abbott</div>
                                                    <div class="noti-details">Membership has been ended.</div>
                                                    <div class="noti-date">Today, 07:30 pm</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-img busy">
                                                    <img src="img/user10.png" alt="Admin Panel">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Braxten</div>
                                                    <div class="noti-details">Approved new design.</div>
                                                    <div class="noti-date">Today, 12:00 am</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-img online">
                                                    <img src="img/user6.png" alt="Admin Template">
                                                </div>
                                                <div class="details">
                                                    <div class="user-title">Larkyn</div>
                                                    <div class="noti-details">Check out every table in detail.</div>
                                                    <div class="noti-date">Today, 04:00 pm</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name">Zyan Ferris</span>
                                    <span class="avatar">ZF<span class="status busy"></span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                    <div class="header-profile-actions">
                                        <div class="header-user-profile">
                                            <div class="header-user">
                                                <img src="img/user.png" alt="Admin Template">
                                            </div>
                                            <h5>Zyan Ferris</h5>
                                            <p>Admin</p>
                                        </div>
                                        <a href="#"><i class="icon-user1"></i> My Profile</a>
                                        <a href="#"><i class="icon-settings1"></i> Reset Password</a>
                                        <a href="{{url('admin/user/logout')}}">
                                            <i class="icon-log-out1"></i> 
                                            Sign Out
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Header actions end -->
                    </div>
                </header>
                <!-- Header end -->



                <!-- Page header start -->
                <div class="page-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Admin Dashboard</li>
                    </ol>

                    <ul class="app-actions">
                        <li>
                            <a href="#" id="reportrange">
                                <span class="range-text"></span>
                                <i class="icon-chevron-down"></i>
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
                <!-- Page header end -->

                <!-- Main container start -->
                <div class="main-container">
                    @yield('content');

                    
                </div>
                <!-- Main container end -->

                <footer class="text-center text-lg-start text-white"
                        padding="0 1.5rem" z-index="100" position="fixed" left="150px" left="150px" right="0" border-bottom="1px"
                        solid ="e4e9f1" min-height="50px" display="flex" align-items="center"justify-content="space-between"transition="left .3s ease"
                >
                    <!-- Copyright -->
                    <div class="text-center p-3">
                        <a class="text-black" href="#">Copyright ©2024 All rights reserved | SiemReap Goldenkids School</a>
                    </div>
                <!-- Copyright -->
                </footer>

				
			</div>
			<!-- Page content end -->
			

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="{{asset('backend/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/js/moment.js')}}"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
        <script src="{{asset('backend/vendor/slimscroll/slimscroll.min.js')}}"></script>
        <script src="{{asset('backend/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Daterange -->
        <script src="{{asset('backend/vendor/daterange/daterange.js')}}"></script>
        <script src="{{asset('backend/vendor/daterange/custom-daterange.js')}}"></script>

		<!-- Chartist JS -->
        <script src="{{asset('backend/vendor/chartist/js/chartist.min.js')}}"></script>
        <script src="{{asset('backend/vendor/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{asset('backend/vendor/chartist/js/custom/threshold/threshold.js')}}"></script>
        <script src="{{asset('backend/vendor/chartist/js/custom/bar/bar-chart-orders.js')}}"></script>

		<!-- jVector Maps -->
        <script src="{{asset('backend/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
        <script src="{{asset('backend/vendor/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('backend/vendor/jvectormap/gdp-data.js')}}"></script>
        <script src="{{asset('backend/vendor/jvectormap/custom/world-map-markers2.js')}}"></script>

		<!-- Rating JS -->
        <script src="{{asset('backend/vendor/rating/raty.js')}}"></script>
        <script src="{{asset('backend/vendor/rating/raty-custom.js')}}"></script>

		<!-- Apex Charts -->
        <script src="{{asset('backend/vendor/apex/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/ecommerce-dashboard/by-device.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/ecommerce-dashboard/by-customer-type.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/ecommerce-dashboard/by-channel.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/ecommerce-dashboard/orders-visits-bouncerate.js')}}"></script>

        <script src="{{asset('backend/vendor/apex/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/column/basic-column-graph.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/column/basic-column-graph-datalables.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/column/basic-column-stack-graph.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/column/basic-column-stack-graph-fullheight.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/column/basic-column-graph-rotated-labels.js')}}"></script>

		<!-- Google Maps -->
		<!-- Below Maps Key is for demo purpose. Please replace the API with your account. Do not use below Key in your project -->
		<script async defer
			src="https://www.google.com/maps/place/Phsar+Leu+Thom+Tmey/@13.3597307,103.8729372,848m/data=!3m1!1e3!4m6!3m5!1s0x3110179bfd6e761b:0xa3b750cac569700d!8m2!3d13.3599895!4d103.8746054!16s%2Fg%2F1tfjhl7m?entry=ttu">
			</script>


		<!-- Fullcalendar -->
		

		<script src="{{asset('backend/vendor/apex/examples/pie/basic-pie-graph-monochrome.js')}}"></script>
        <script src="{{asset('backend/vendor/apex/examples/pie/basic-pie-graph-monochrome-gradient.js')}}"></script>

		<!-- Flot Custom Graphs -->
        <script src="{{asset('backend/vendor/flot/custom/barGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/stackedGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/lineGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/areaGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/thresholdsGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/percentilesGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/crosshairGraph.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/pieChart.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/donutChart.js')}}"></script>
        <script src="{{asset('backend/vendor/flot/custom/pieTiltChart.js')}}"></script>

		
		<!-- Main JS -->
        <script src="{{asset('backend/js/main.js')}}"></script>
        <script src="{{asset('backend/js/main1.js')}}"></script>
        <script src="{{asset('backend/js/popper.js')}}"></script>


        <script>
            var burl = "{{url('/')}}";
        </script>
        @yield('js');
	</body>

</html>
