<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-Learning Site | Join Now </title>
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
	<link rel="stylesheet" href="css/buy.css" />

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
					<a href="index.php" class="site-btn header-btn">Log Out</a>
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
				<span>Buy A Course</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->



	<!-- course section -->
	<!-- <section class="course-section spad"> -->

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="register.php" method="post" id="myform" enctype="multipart/form-data">
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<input type="text" name="user_name" id="user_name" class="input-text" placeholder="User Name" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="address" class="address" id="address" placeholder="Address" required>
					</div>
					<div class="form-row">
						<select name="position">
							<option value="position">Position</option>
							<option value="Graduate">Graduate</option>
							<option value="UnderGraduate">UnderGraduate</option>
							<option value="Job Holder">Job Holder</option>
						</select>
					</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="University/Company">
					</div>
				</div>
				<div class="form-right">
					<h2>Course Details</h2>
					<div class="form-row">
						<select name="course_name">
							<option value="course_name">Course Name</option>
							<option value="PHP and Laravel">PHP and Laravel</option>
							<option value="MERN Stack">MERN Stack</option>
							<option value="Ethical Hacking">Ethical Hacking</option>
							<option value="C/C++">C/C++</option>
							<option value="JavaScript">JavaScript</option>
							<option value="Java">Java</option>
							<option value="English Grammer">English Grammer</option>
							<option value="Hacking & Security">Hacking & Security</option>
							<option value="Python">Python</option>
							<option value="HTML & CSS">HTML & CSS</option>
						</select>
					</div>
					<div class="form-row">
						<select name="cost">
							<option value="cost">Course Costing</option>
							<option value="12000">PHP-12000৳</option>
							<option value="12000">MERN-12000৳</option>
							<option value="7500">EH-7500৳</option>
							<option value="3000">C/C++-3000৳</option>
							<option value="7000">JS-7000৳</option>
							<option value="3000">Java-3000৳</option>
							<option value="5000">EG-5000৳</option>
							<option value="7500">H&S-7500৳</option>
							<option value="3000">Python-3000৳</option>
							<option value="4000">H&C-4000৳</option>
						</select>
					</div>
					<div class="form-row">
						<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
					</div>
					<div class="form-row">
						<input type="text" name="t_id" class="t_id" id="t_id" placeholder="Transaction ID" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" placeholder="Your Email">
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>


	<!-- </section> -->
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
							<p>*We don’t spam</p>
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