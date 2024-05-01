<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.suelo.pl/jestem/html/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 09:33:21 GMT -->
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Jestem - Elegant & Minimal Personal Resume vCard Theme</title>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/favicon_60x60.html">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76x76.html">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120x120.html">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152x152.html">

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,700,500' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/owl.carousel.css" />
<link rel="stylesheet" href="../css/owl.theme.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel="stylesheet" href="../fonts/flaticon.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../colors/green.css" id="color" />

<!-- Styleswitcher -->
<link rel="stylesheet" type="text/css" href="styleswitcher/styleswitcher.css" />

</head>

<body class="padded-body sticky-header">

<!-- Loader -->
<div id="page-loader"></div>
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="clearfix">
	<a href="blog.html" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left"></i></a>
	<div class="header-text pull-right">
		<span class="title text-uppercase"><a href="index.html">Krishnendu V S</a></span>
		<span class="caption text-muted text-uppercase hidden-xs">Poet,Freelancer,Digital Marketer</span>
	</div>
</header>
<!-- Header / End -->

<!-- Content -->
<div id="content" class="container">
	<div class="row">

		<div class="col-md-9">
			<div class="post">
				<div class="post-image"><img src="{{asset($poem['image'])}}" alt="" /></div>
				<div class="post-content">
					<div class="post-category">
						<span class="label label-primary">{{$poem['category']}}</span>
					</div>
					<div class="post-title">
						<h1><a href="blog-post.html">{{$poem['name']}}</a></h1>
					</div>
					<div class="post-meta">
						<span><i class="icon-before fa fa-user"></i><a href="#">Krishnendu V S</a></span>
						<span><i class="icon-before fa fa-clock-o"></i>
							{{ \Carbon\Carbon::parse($poem['created_at'])->format('d.m.Y') }}
						</span>
					</div>
					<div class="post-text">
						<p class="lead">{{$poem['lyrics']}}</p>
					</div>
				</div>
				<!-- Comments -->
                <h4 class="title-bar"><strong>Comments</strong> (3)</h4>
                <ul class="comments">
                    <li class="single-comment">
                        <div class="comment-avatar"><img src="../../images/avatars/avatar01.jpg" alt="" /></div>
                        <div class="comment-content">
                            <div class="comment-head">
                                <h5 class="comment-title margin-bottom-0">Really awesome theme!</h5>
                                <span class="text-xs"><span class="text-muted">Added</span> 5 days ago <span class="text-muted">by</span> <a href="#">Michael Kors</a></span>
                            </div>
                            <div class="comment-text font-alt">
                                In ut risus at risus ultricies sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum porttitor congue accumsan. Cum sociis natoque penatibus et magnis dis parturient montes 
                            </div>
                            <a href="#" class="btn btn-xs btn-primary"><i class="icon-before fa fa-pencil"></i>Write a reply</a>
                        </div>
                        <ul class="comments">
		                    <li class="single-comment">
		                        <div class="comment-avatar"><img src="../images/avatar-default.jpg" alt="" /></div>
		                        <div class="comment-content">
		                            <div class="comment-head">
		                                <h5 class="comment-title margin-bottom-0">Yes, you are right!</h5>
		                                <span class="text-xs"><span class="text-muted">Added</span> 5 days ago <span class="text-muted">by</span> <a href="#">Michael Kors</a></span>
		                            </div>
		                            <div class="comment-text font-alt">
		                               Vestibulum porttitor congue accumsan. Cum sociis natoque penatibus et magnis dis parturient montes 
		                            </div>
		                        </div>
		                    </li>
		                    <li class="single-comment">
		                        <div class="comment-avatar"><img src="../images/avatars/avatar02.jpg" alt="" /></div>
		                        <div class="comment-content">
		                            <div class="comment-head">
		                                <h5 class="comment-title margin-bottom-0">Yep!</h5>
		                                <span class="text-xs"><span class="text-muted">Added</span> 5 days ago <span class="text-muted">by</span> <a href="#">Michael Kors</a></span>
		                            </div>
		                            <div class="comment-text font-alt">
		                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum porttitor congue accumsan. Cum sociis natoque penatibus et magnis dis parturient montes 
		                            </div>
		                        </div>
		                    </li>
		                </ul>
                    </li>
                    <li class="single-comment">
                        <div class="comment-avatar"><img src="../images/avatar-default.jpg" alt="" /></div>
                        <div class="comment-content">
                            <div class="comment-head">
                                <h5 class="comment-title margin-bottom-0">Lots of good wishes!</h5>
                                <span class="text-xs"><span class="text-muted">Added</span> 5 days ago <span class="text-muted">by</span> <a href="#">Michael Kors</a></span>
                            </div>
                            <div class="comment-text font-alt">
                                In ut risus at risus ultricies sodales. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum porttitor congue accumsan. Cum sociis natoque penatibus et magnis dis parturient montes 
                            </div>
                            <a href="#" class="btn btn-xs btn-primary"><i class="icon-before fa fa-pencil"></i>Write a reply</a>
                        </div>
                    </li>
                    <li class="single-comment">
                        <div class="comment-avatar"><img src="../images/avatars/avatar01.jpg" alt="" /></div>
                        <div class="comment-content">
                            <div class="comment-head">
                                <h5 class="comment-title margin-bottom-0">Really awesome theme!</h5>
                                <span class="text-xs"><span class="text-muted">Added</span> 5 days ago <span class="text-muted">by</span> <a href="#">Michael Kors</a></span>
                            </div>
                            <div class="comment-text font-alt">
                                In ut risus at risus ultricies sodales.  Vestibulum porttitor congue accumsan. Cum sociis natoque penatibus et magnis dis parturient montes 
                            </div>
                            <a href="#" class="btn btn-xs btn-primary"><i class="icon-before fa fa-pencil"></i>Write a reply</a>
                        </div>
                    </li>
                </ul>
                <!-- Write a comment -->
                <h4 class="title-bar"><strong>Write</strong> a comment</h4>
                <form class="margin-bottom-40 clearfix">
                	<div class="form-group">
				    	<input type="text" class="form-control" id="commentName" name="name" placeholder="Name">
				    </div>
				    <div class="form-group">
				    	<textarea class="form-control" id="comment" name="message" rows="3"  placeholder="Message"></textarea>
				    </div>
				    <div class="form-group clearfix">
                    	<button type="submit" class="btn btn-primary btn-filled btn-sm pull-right">Send it!</button>
                    </div>
                </form>
			</div>
		</div>
		<div class="col-md-3">
			<!-- Categoies -->
			<div class="widget widget_categories">
				<h4 class="title-bar"><strong>Categories</strong></h4>
				<ul class="nav-list">
					<li><a href="#">Coaching / Motivation</a></li>
					<li><a href="#">Business</a></li>
					<li><a href="#">Sport</a></li>
					<li><a href="#">Psychoanalisis</a></li>
				</ul>
			</div>
			<!-- Latest Postst -->
			<div class="widget widget_recent_posts">
				<h4 class="title-bar"><strong>Recent</strong> Posts</h4>
				<ul class="recent-posts">
					<li class="clearfix">
						<div class="post-image"><img src="../images/posts/post01_min.jpg" alt="" /></div>
						<div class="post-content">
							<span class="post-title"><a href="blog-post.html">Tiger Weed’s motivate course.  How it was?</a></span>
							<span class="post-date">24.05.2014</span>
						</div>
					</li>
					<li class="clearfix">
						<div class="post-image"><img src="../images/posts/post02_min.jpg" alt="" /></div>
						<div class="post-content">
							<span class="post-title"><a href="blog-post.html">Tiger Weed’s motivate course.  How it was?</a></span>
							<span class="post-date">24.05.2014</span>
						</div>
					</li>
				</ul>
			</div>
			<!-- Tweets -->
			
		</div>

	</div>
</div>
<!-- Content / End -->

<!-- Footer -->
<footer id="footer" class="text-center">
	<hr class="sep" />
	<div class="copyright text-xs font-alt text-uppercase margin-bottom-30">Copyright <a href="index.html"><strong>Mary Jane Doe</strong></a> 2015©</div>
</footer>
<!-- Footer / End -->

<!-- Libraries -->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="../js/plugins.js"></script>

<!-- Custom Script -->
<script src="../js/custom.min.js"></script>
<script>
Jestem.carousel();
</script>

<!-- Styleswitcher -->
<script type="text/javascript" src="../styleswitcher/styleswitcher.js"></script>

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


<!-- Mirrored from themes.suelo.pl/jestem/html/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 09:33:23 GMT -->
</html>
