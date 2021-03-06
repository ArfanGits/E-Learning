<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-Learning Site | Courses </title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/head.jpg" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/main-logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<!-- <a href="login.php" class="site-btn header-btn">Login</a> -->
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="blog.php">News</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="contact.php">About us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Home</a>
				<span>Courses</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2><span>Search your course</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<!-- search form -->
						<form class="course-search-form">
							<input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Category">
							<button class="site-btn btn-dark">Search Course</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".finance">Coding</li>
				<li class="control" data-filter=".design">Web Design</li>
				<li class="control" data-filter=".web">Web Development</li>
				<li class="control" data-filter=".photo">Ethical Hacking</li>
			</ul>
			<div class="row course-items-area">
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
							<div class="price">Price: 3000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>C/C++</h5>
								<p>???If you think it's simple, then you have misunderstood the problem.?????? Bjarne Stroustrup</p>
								<div class="students">70 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/2.jpg">
							<div class="price">Price: 5000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Illustrator & Photoshop</h5>
								<p>???When you have a dream, you???ve got to grab it and never let go.???
								<br>	??? Carol Burnett</p>
								<div class="students">120 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							<div class="price">Price: 12000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>MERN Stack</h5>
								<p>???Nothing is impossible. The word itself says ???I???m possible!'??? <br>
									??? Audrey Hepburn</p>
								<div class="students">57 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">
							<div class="price">Price: 10000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Account Cracking</h5>
								<p>???The bad news is time flies. The good news is you???re the pilot.???
									??? Michael Altshuler</p>
								<div class="students">120 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/5.jpg">
							<div class="price">Price: 2000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Python</h5>
								<p>???Keep your face always toward the sunshine, and shadows will fall behind you.???
									??? Walt Whitman</p>
								<div class="students">25 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							<div class="price">Price: 7500???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Adobe Premier Pro</h5>
								<p>???You are never too old to set another goal or to dream a new dream.???
									??? Malala Yousafzai</p>
								<div class="students">100 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/7.jpg">
							<div class="price">Price: 12000???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Python & Django</h5>
								<p>???You can be everything. You can be the infinite amount of things that people are.???
									??? Kesha</p>
								<div class="students">20 Students</div>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/courses/8.jpg">
							<div class="price">Price: 11500???</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Hacking & Cyber Security</h5>
								<p>???Belief creates the actual fact.???
								<br>	??? William James</p> 
								<div class="students">80 Students</div> <br>
							</div>
							<center>
								<a href="buy.php" class="site-btn">Join Now</a>
							</center>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/pro.jpg"></div>
								<p>Arfan A Khan, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="featured-courses">

			</div>
		</div>
	</section>
	<!-- course section end -->


	<!-- footer section -->
	<footer class="footer-section spad">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>Chittagong, Bangladesh</li>
							<li>+880 181 8786108</li>
							<li>alpharfan07@gmail.com</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Coding</h4>
						<ul>
							<li><a href="">C/C++</a></li>
							<li><a href="">Python</a></li>
							<li><a href="">JavaScript</a></li>
							<li><a href="">C#</a></li>
							<li><a href="">Java</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Graphic Design</h4>
						<ul>
							<li><a href="">Adobe Illustrator</a></li>
							<li><a href="">Adobe Photoshop</a></li>
							<li><a href="">Adobe UI/UX</a></li>
							<li><a href="">Adobe InDesign</a></li>
							<li><a href="">Adobe Premier</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Development</h4>
						<ul>
							<li><a href="">MERN Stack</a></li>
							<li><a href="">PHP and Laravel</a></li>
							<li><a href="">Python and Django</a></li>
							<li><a href="">Asp.net</a></li>
							<li><a href="">Flutter</a></li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don???t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>