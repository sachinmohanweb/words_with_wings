<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>WordsWithWings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin_login/img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="admin_login/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="admin_login/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="admin_login/css/style.css" />
    <link rel="stylesheet" type="text/css" href="admin_login/css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="admin_login/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="admin_login/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="admin_login/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="admin_login/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="admin_login/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="admin_login/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="admin_login/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="admin_login/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="admin_login/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="admin_login/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="admin_login/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="admin_login/js/modernizr.js"></script>

</head>

<body class="double-diagonal dark auth-page">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="admin_login/img/styleswitcher/logos/yellow.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/blue.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/blue.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/blue.png'; document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="admin_login/img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/blueviolet.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="admin_login/img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/goldenrod.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/goldenrod.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="admin_login/img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/green.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/green.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/green.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="admin_login/img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/magenta.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/magenta.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/magenta.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="admin_login/img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/orange.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/orange.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/orange.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="admin_login/img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/purple.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/purple.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/purple.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="admin_login/img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/red.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/red.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/red.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="admin_login/img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/yellow.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/yellow.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/yellow.png';document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="admin_login/img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-mobile-light').src='admin_login/img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-mobile-dark').src='admin_login/img/styleswitcher/logos/logos-dark/yellowgreen.png'; document.getElementById('single-logo').src='admin_login/img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-light').src='admin_login/img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='admin_login/img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="admin_login/img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"  /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>

            <hr />

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="index-kenburns.html">
					<img id="single-logo" class="img-responsive" src="admin_login/img/styleswitcher/logos/yellow.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<!-- Slider Starts -->
				<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators Starts -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
					<!-- Indicators Ends -->
					<!-- Carousel Inner Starts -->
					<div class="carousel-inner">
						<!-- Carousel Item Starts -->
						<div class="item active item-1">
							<div>
								<blockquote>
									<p>admin_login's Team Was Great To Work With!</p>
									<footer><span>Lucy Smith</span>, England</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-2">
							<div>
								<blockquote>
									<p>The Team Is Endlessly Helpful, Flexible And Always Quick!</p>
									<footer><span>Rawia Chniti</span>, Russia</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-3">
							<div>
								<blockquote>
									<p>We Are So Appreciative Of Their Creative Efforts, And Love!</p>
									<footer><span>Mario Verratti</span>, Spain</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
					</div>
					<!-- Carousel Inner Ends -->
				</div>
				<!-- Slider Ends -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="index-kenburns.html">
					<img id="logo-mobile-light" class="img-responsive mobile-logo white-l" src="admin_login/img/styleswitcher/logos/yellow.png" alt="logo">
					<img id="logo-mobile-dark" class="img-responsive mobile-logo dark-l" src="admin_login/img/styleswitcher/logos/logos-dark/yellow.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1><span>Admin</span> login</h1>
						<p>great to have you back!</p>
					</div>
					<div class="text-center top-text" style="max-width: 450px;margin: 0 auto;">
						@if (Session::has('success'))
	                        <div class="alert alert-success">
	                           <ul>
	                              <li>{!! \Session::get('success') !!}</li>
	                           </ul>
	                        </div>
	                     @endif

	                     @if(session('error'))
	                         <div class="alert alert-danger">
	                             {{ session('error') }}
	                         </div>
	                     @endif

	                     @if($errors->any())
	                        <h6 style="color:red">{{$errors->first()}}</h6>
	                     @endif
					</div>
					<!-- Main Heading Ends -->
						<!-- Form Starts -->
						<form class="custom-form" method="post" action="{{route('admin.login')}}">
							@csrf
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="custom-button login" type="submit">login</button>
								<p class="text-center">Forgot password ? <a href="">Click Here</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">Copyright © 2024 | WordsWithWings |
					<a href="https://sachinmohanweb.github.io/myprofile/">Sm </a>|
					 All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="admin_login/js/jquery-2.2.4.min.js"></script>
    <script src="admin_login/js/plugins/jquery.easing.1.3.js"></script>
    <script src="admin_login/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="admin_login/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="admin_login/js/custom.js"></script>
</body>
</html>