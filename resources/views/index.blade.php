<?php
	use Illuminate\Support\Str;
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>WordsWithWings</title>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/owl.carousel.css" />
<link rel="stylesheet" href="css/owl.theme.css" />
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="fonts/flaticon.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="colors/green.css" id="color" />

<!-- Styleswitcher -->
<link rel="stylesheet" type="text/css" href="styleswitcher/styleswitcher.css" />
<style type="text/css">

	.post-with-background {
    position: relative;
    overflow: hidden;
    height: 300px; /* Adjust the desired height */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; /* Prevent image from repeating */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to the background image */
}

.post-content {
    position: relative; /* Change position to relative */
    z-index: 1; /* Ensure content appears above the shadow */
    padding: 20px;
}

.post-content h4 a {
    color: #333; /* Set text color */
}

.post-content p {
    color: #555; /* Set text color */
}

.poem_box_pd{
	padding-bottom: 45px;
	padding-right: 15px;
	padding-left: 40px;
	border-radius: 20px;
}

.bl_single_poem {
    max-height: 300px;
    position: relative;
    width: 100%;
    overflow: hidden;
	border-radius: 20px;
}

.bl_single_poem:hover img{
    overflow: hidden;
    transform: scale(1.1) rotate(3deg);
}

.bl_single_poem img {
    transition: all 0.5s ease 0s;
    width: 100%;
}

.clr_fff{
    color: #fff;
}

</style>
</head>

<body>

<!-- Loader -->
<div id="page-loader"></div>
<!-- Loader / End -->

<!-- Page Wrapper -->
<div id="page-wrapper">
	
	<!-- Home -->
    <div id="home">
    	<div class="home-wrapper">

	    	<!-- Home Content -->
	    	<div class="home-content home-photo main-photo dark">
	    		<div class="logo-container">
	    				<img src="images/logo4.png" class="fixed-logo">
	    		</div>
	    		<div class="overlay overlay-black" data-alpha="60"></div>
	    		<div class="text-center vertical-center">
	    			<span class="home-title"><strong>Krish</strong>nendu V R</span>
	    			<h3 class="home-title-sub">Explore the Poetry Within</h3>
	    		</div>
	    	</div>

	    	<!-- Start Button -->
	    	<a href="#" id="btn-start" data-target="next-section"></a>

	    	<!-- Main Nav -->
	    	<nav id="main-nav">
	    		<!-- Menu Toggle -->
	    		<a href="#" class="menu-toggle menu-toggle-destop" data-target="menu-toggle"></a>
	    		<!-- Content -->
	            <div class="text-right vertical-center">
	        		<div class="nav-text">
		        		<div class="my-avatar"><img src="images/photos/my_avatar.jpg" class="img-circle" alt="" /></div>
		        		<h2 class="margin-bottom-0"><strong>Krish</strong>nendu V R</h2>
		        		<h6 class="nav-caption">I’m 28 years old proffesional <span class="text-primary">mental coach</span> from Poland.</h6>
		        	</div>
	        		<div class="content-buttons">
	            		<a href="blog.html" class="btn btn-primary" data-placement="1">Check my Blogs</a>
	            		<a href="blog.html" class="btn btn-primary" data-placement="2">Check my Images</a>
	            </div>
	            </div>
	    		<!-- Navigation buttons -->
	            <div class="nav-buttons">
	            	<a href="#" class="btn-prev" data-target="prev-section"><i class="fa fa-angle-left"></i><span></span></a>
	            	<a href="#" class="btn-next" data-target="next-section"><span>My Resume</span><i class="fa fa-angle-right"></i></a>
	            </div>
	    	</nav>
	    	
    	</div>
    </div> 
    <!-- Home / End -->

    <!-- Sections -->
    <div id="sections" class="swiper-container">

    	<div class="swiper-wrapper">

    	<!-- Latest Posts -->
			<section id="latestPosts" class="swiper-slide" data-caption="Check my <span>latest blogs</span>" data-title="Latest Posts">
				<div class="section-wrapper">

					<div class="middle-container padded">

		    			<!-- Posts List -->
		    			<div class="blog-post-list">

			    			<div class="row">
								@foreach($poems as $key => $poem)
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 poem_box_pd">
									<div class="bl_single_poem">	
								    	<img src="{{ asset($poem['image']) }}" alt="440*265">
								    	<div class="row">
              								<div class="bl_single_text"> 
	                							<h4 class="clr_fff">{{ $poem['name'] }}</h4>
	                							<span class="clr_fff">
	                								<i class="fa fa-clock-o"></i> 
	                								{{ \Carbon\Carbon::parse($poem['created_at'])->format('d/m/Y') }}
	                							</span>
                							</div>
                						</div>

								    	<div class="row">
									    	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 bl_single_text_lyric"> 
												<div class="post-contentt">
									    			<div class="post-category">
									    				<h4 class="clr_fff">
									    				"{{ Str::limit($poem['lyrics'], 50) }}"</h4>
									                </div>     
									            </div>
									            <div class="text-right" style="margin-right: 40px;">
                									<a class="btn btn-primary btn-sm margin-bottom-10 clr_fff" 
                									href="{{url('blog_details/'.$poem['id'])}}">Read More</a>
            									</div>
									       	</div>
								    	</div>

								    </div>
								</div>
        						@endforeach
			    			</div>
		    			</div>
					</div>
				</div>
			</section>
			<!-- Latest Posts / End -->

	    	<!-- Portfolio -->
			<section id="portfolio" class="swiper-slide" data-caption="Look at my <span>Portfolio</span>" data-title="My Portfolio">
				<div class="section-wrapper">
					<!-- Items List -->
					<div class="portfolio-list portfolio-dark">
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project01.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Business Courses</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item item-wide" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/book2.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team Work Management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project03.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Mental Coaching</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project04.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/book1.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item item-wide" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project06.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project05.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project08.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item item-wide" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/book3.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
						<!-- Portfolio Item -->
						<a href="projects/project01.html" class="portfolio-item" data-target="ajax-portfolio">
							<div class="item-photo">
								<img src="images/projects/project10.jpg" alt="">
							</div>
							<div class="item-overlay">
								<span class="item-title">Team work management</span>
							</div>
						</a>
					</div>
				</div>
				<!-- Item Details -->
				<div id="portfolio-details"></div>
				<!-- Ajax Loader -->
				<div class="ajax-loader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
			</section>
			<!-- Portfolio / End -->

    		<!-- Resume -->
			<section id="resume" class="swiper-slide" data-caption="Check my <span>skills</span> &amp; <span>abilities</span>" data-title="My Resume">
				<div class="section-wrapper">
					<div class="resume-grid padded">
						<div class="row">

			    			<div class="resume-col">

			    				<!-- About -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover"><strong>About</strong> Me</h4>
				    				<div class="box-content">
				    					<p class="lead">I’m <strong>Mary Jane Doe</strong> - 28 years old professional mentalist in Poland.</p>
										<p>Through <strong>7 years of my expierience</strong> I have been working for over <strong>200+ happy clients</strong> from all over the world. I’m always looking for new, interesting colaborations and I’m sure that I’m the man you need to hire!</p>
	            						<a href="#" class="btn btn-primary" data-target="slide" data-slide="4">Contact Me</a>
				    				</div>
				    			</div>

				    			<!-- Services -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover">My <strong>Services</strong></h4>
				    				<div class="box-content">
				    					<div class="single-service">	
				    						<div class="service-icon icon icon-black icon-circle icon-filled">
				    							<i class="flaticon-profiles-avatar"></i>
				    						</div>
				    						<div class="service-content">
				    							<h4 class="service-title"><strong>Motivation</strong> Curses</h4>
				    							<span class="service-caption text-muted "><i>Short, but really great &amp; awesome service caption</i></span>
				    						</div>
				    					</div>
				    					<div class="single-service">	
				    						<div class="service-icon icon icon-black icon-circle icon-filled">
				    							<i class="flaticon-think4"></i>
				    						</div>
				    						<div class="service-content">
				    							<h4 class="service-title"><strong>Psychoanalysis</strong></h4>
				    							<span class="service-caption text-muted "><i>Short, but really great &amp; awesome service caption</i></span>
				    						</div>
				    					</div>
				    					<div class="single-service">	
				    						<div class="service-icon icon icon-black icon-circle icon-filled">
				    							<i class="flaticon-tie7"></i>
				    						</div>
				    						<div class="service-content">
				    							<h4 class="service-title"><strong>Business</strong> Mental Coaching</h4>
				    							<span class="service-caption text-muted "><i>Short, but really great &amp; awesome service caption</i></span>
				    						</div>
				    					</div>
				    				</div>
				    			</div>

				    		</div>

				    		<div class="resume-col">

			    				<!-- Skills & Abilities -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover"><strong>Skills</strong> &amp; Abilities</h4>
				    				<div class="box-content">
				    					<!-- Skill Bar -->
				    					<div class="skill-bar">
					    					<div class="progress">
											  <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											    <span class="percent">90%</span>
											  </div>
											</div>
											<h6 class="skill-title">Mental Coaching</h6>
										</div>
										<!-- Skill Bar -->
				    					<div class="skill-bar">
					    					<div class="progress">
											  <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											    <span class="percent">60%</span>
											  </div>
											</div>
											<h6 class="skill-title">Motivation Ability</h6>
										</div>
										<!-- Skill Bar -->
				    					<div class="skill-bar">
					    					<div class="progress">
											  <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											    <span class="percent">75%</span>
											  </div>
											</div>
											<h6 class="skill-title">Psychoanalisys</h6>
										</div>
										<!-- Skill Bar -->
				    					<div class="skill-bar">
					    					<div class="progress">
											  <div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											    <span class="percent">55%</span>
											  </div>
											</div>
											<h6 class="skill-title">Family support</h6>
										</div>
				    				</div>
				    			</div>

				    			<!-- Educations & Jobs -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover"><strong>Education</strong> &amp; Jobs</h4>
				    				<div class="box-content">
				    					<div class="timeline">
						                    <!-- Single event -->
						                  	<div class="timeline-event te-black">
						                      <div class="event-date">06.2011 - 12.2012</div>
						                      <h4 class="event-name"><strong>Managing</strong> Director</h4>
						                      <div class="event-description ">Google Inc., USA</div>
						                    </div>
						                    <!-- Single event -->
						                  	<div class="timeline-event te-black">
						                      <div class="event-date">06.2011 - 12.2012</div>
						                      <h4 class="event-name"><strong>Specialization</strong> Course</h4>
						                      <div class="event-description ">AGH, Poland</div>
						                    </div>
				    					</div>
				    				</div>
				    			</div>
				    		</div>

				    		<div class="resume-col">

				    			<!-- Languages -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover"><strong>Language</strong> Skills</h4>
				    				<div class="box-content text-center">
				    					<!-- Single Chart -->
				    					<div class="single-chart font-alt">
				    						<div class="chart chart-lg" data-bar-color="#111111" data-track-color="#e5e5e5" data-percent="75"><span class="percent"></span></div>
				    						<div class="chart-content text-uppercase">	
				    							<span class="chart-title">English</span>
				    							<span class="chart-caption text-muted">Advanced level</span>
				    						</div>
				    					</div>
				    					<!-- Single Chart -->
				    					<div class="single-chart font-alt">
				    						<div class="chart chart-lg" data-bar-color="#111111" data-track-color="#e5e5e5" data-percent="25"><span class="percent"></span></div>
				    						<div class="chart-content text-uppercase">	
				    							<span class="chart-title">Spanish</span>
				    							<span class="chart-caption text-muted">Basic level</span>
				    						</div>
				    					</div>
				    				</div>
				    			</div>

				    			<!-- Hobibes -->
				    			<div class="resume-box">
				    				<h4 class="title-bar title-bar-black title-bar-hover"><strong>Hobbies</strong> &amp; Interests</h4>
				    				<div class="box-content">
				    					<div class="row">
				    						<!-- Icon Box -->
									        <div class="col-sm-4 icon-box text-center">
									          <span class="icon icon-circle icon-sm icon-black"><i class="flaticon-think4"></i></span>
									          <h6 class="font-alt margin-bottom-0">Psychology</h6>
									        </div>
									        <!-- Icon Box -->
									        <div class="col-sm-4 icon-box text-center">
									          <span class="icon icon-circle icon-sm icon-black"><i class="flaticon-location1"></i></span>
									          <h6 class="font-alt margin-bottom-0">Travelling</h6>
									        </div>
									        <!-- Icon Box -->
				    						<div class="col-sm-4 icon-box text-center">
									          <span class="icon icon-circle icon-sm icon icon-black"><i class="flaticon-coffee-cup1"></i></span>
									          <h6 class="font-alt margin-bottom-0">Coffee</h6>
									        </div>
				    					</div>
				    				</div>
				    			</div>

				    		</div>

						</div>
					</div>
				</div>
			</section>
			<!-- Resume / End -->

    		<!-- Contact -->
			<section id="contact" class="swiper-slide" data-caption="Do not hestiate to <span>contact me</span>" data-title="Contact Me">
				<div class="section-wrapper">

					<!-- Content -->
					<div class="contact-content padded">

						<!-- Info -->
		    			<div class="contact-box">
		    				<h4 class="title-bar title-bar-black"><strong>Contact</strong> me</h4>
		    				<div class="box-content">
		    					<ul class="list-icons ">
		    						<li>
		    							<i class="fa fa-map-marker fa-fw text-primary"></i>
		    							<span class="content">1111-A Nowhere Lane,<br>
										Outta Sight,<br>
										State 90378, USA</span>
									</li>
									<li>
		    							<i class="fa fa-envelope-o fa-fw text-primary"></i>
		    							<span class="content"><a href="#">johnathandoe@suelo.pl</a></span>
									</li>
									<li>
		    							<i class="fa fa-phone fa-fw text-primary"></i>
		    							<span class="content">+0(31)6 89764536</span>
									</li>
		    					</ul>
		    				</div>
		    			</div>

		    			<!-- Form -->
		    			<div class="contact-box">
		    				<h4 class="title-bar title-bar-black"><strong>Write</strong> to me</h4>
		    				<form id="contact-form" class=" clearfix">
		    					<div class="row">
		    						<div class="col-md-6 form-group">
		    							<input type="text" name="name" class="form-control" placeholder="Name and surname">
		    						</div>
		    						<div class="col-md-6 form-group">
		    							<input type="email" name="email" class="form-control" placeholder="Email address">
		    						</div>
		    						<div class="col-md-12 form-group">
		    							<input type="text" name="subject" class="form-control" placeholder="Subject">
		    						</div>
		    					</div>
		    					<div class="form-group">
		    						<textarea name="message" class="form-control" rows="4" placeholder="Your message"></textarea>
		    					</div>
		    					<button type="submit" class="btn btn-primary pull-right">Send Message!</button>
		    				</form>
		    			</div>

		    			<!-- Social Media -->
		    			<div class="contact-box">
		    				<h4 class="title-bar title-bar-black"><strong>Social</strong> media</h4>
		    				<div class="social-icons margin-bottom-10">
		    					<a href="#" class="social-icon icon-facebook"><i class="fa fa-facebook fa-fw"></i></a>
		    					<a href="#" class="social-icon icon-twitter"><i class="fa fa-twitter fa-fw"></i></a>
		    					<a href="#" class="social-icon icon-google-plus"><i class="fa fa-google-plus fa-fw"></i></a>
		    				</div>
		    				<div class="fb-like" data-href="https://www.facebook.com/suelopl" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
		    			</div>

					</div>

					<!-- Map -->
					<div class="contact-map dark">
						<div id="google-map" data-style="dark"></div>
						<div class="map-overlay">
							<div class="overlay overlay-black" data-alpha="50"></div>
							<div class="overlay-content vertical-center ">
								<div class="owl-carousel" data-single-item="true" data-auto-play="4000">
									<div>
										<span class="big-text">Working with Mary it was the best time in my life!</span>
										<span class="caption text-primary">Jessica Perry, 24 years old</span>
									</div>
									<div>
										<span class="big-text">She completely changed my personal &amp; business life!</span>
										<span class="caption text-primary">Mark Webber, 32 years old</span>
									</div>
								</div>
							</div>
						</div>
						<a href="#" class="btn btn-xs btn-black" data-target="toggle-map">Google map</a>
					</div>

				</div>
			</section>
			<!-- Contact / End -->

		</div>

		<!-- Menu Toggle -->
    	<a href="#" class="menu-toggle menu-toggle-mobile" data-target="menu-toggle"></a>

    </div>
    <!-- Sections / End -->

    <!-- Mobile Info -->
	<div id="mobile-info">
		<span class="left fa fa-chevron-left"></span><span class="right fa fa-chevron-right"></span>
	</div>

	<!-- Main Menu -->
	<div id="main-menu" class="dark">
		<!-- Menu Toggle -->
    	<a href="#" id="menu-close"></a>
		<ul class="nav nav-menu vertical-center">
			<li><a href="#" data-slide="1">Latest Poems</a></li>
			<li><a href="#" data-slide="2">Portfolio</a></li>
			<li><a href="#" data-slide="3">Resume</a></li>
			<li><a href="#" data-slide="4">Contact</a></li>
			<li><a href="blog.html">Blog</a></li>
		</ul>
	</div>
    
</div>
<!-- Page Wrapper / End -->

<!-- Libraries -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="js/plugins.js"></script>

<!-- Google Map -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/GoogleMap.js"></script> -->

<!-- Custom Script -->
<script src="js/custom.min.js"></script>

<!-- Styleswitcher -->
<script type="text/javascript" src="styleswitcher/styleswitcher.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->

</body>
</html>
