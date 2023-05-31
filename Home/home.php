<?php
  session_start();
  if(isset($_SESSION["email"])){
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Education Website Template</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="home.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
	<nav>
		<img src="img/logo.svg" class="logo" alt="">

		<div class="navigation">
			<ul>
				<i id="menu-close" class="fas fa-times"></i>
				<li><a href="index.html" class="active">Home</a></li>
				<li><a href="placement.html">Placement</a></li>
				<li><a href="department.html">Department</a></li>
				<li><a href="campus.html">Campus</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>

			<img src="img/menu.png" id="menu-btn" alt="">
		</div>
	</nav>
	<!-- Navigation ends -->


	<!-- Hero section starts from here -->
	<section id="home">
		<h2>
			Enhance Your Future With TechEduca
		</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ipsum laboriosam architecto tempora explicabo ratione pariatur accusantium consequatur sed odit?
		</p>
		<div class="btn">
			<a href="#features" class="blue">Learn More</a>
			
		</div>
	</section>
	<!-- Hero section ends from here -->


	<!-- Features section starts from here -->
	<section id="features">
		<h1>Welcome To Xenon Stack Engineering College</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>

		<div class="fea-base">
			<div class="fea-box">
				<i class="fas fa-graduation-cap"></i>
				<h3>Top Faculties</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fa-solid fa-book-bookmark"></i>
				<h3>Get Yourself Best</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fas fa-award"></i>
				<h3>Global Certification</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>
		</div>
	</section>
	<!-- Features section ends from here -->


	<!-- Courses section starts from here -->
	<section id="Teachers">
		<h1>Our Top Teachers</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>

		<div class="Teachers-box">
			<div class="Teachers">
				<img src="img/c1.jpg" alt="">
				<div class="details">
					<span>Ms. Aditi</span>
					<h6>Associate Profeessor</h6>

					<div class="star">
						<span>Phd Holder</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">3 Patents</div>
			</div>

			<div class="Teachers">
				<img src="img/c2.jpg" alt="">
				<div class="details">
					<span>Mr. Rohit Kanauzia</span>
					<h6>Head Of Department(IT)</h6>

					<div class="star">
						

						<span>M.Tech(IIT Delhi)</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">5+ Yrs.</div>
			</div>

			<div class="Teachers">
				<img src="img/c3.jpg" alt="">
				<div class="details">
					<span>Mr. Rahul Singh</span>
					<h6>Head Of Department(CS)</h6>

					<div class="star">
						

						<span>Phd Holder</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">11+ Patents</div>
			</div>

			<div class="Teachers">
				<img src="img/c4.jpg" alt="">
				<div class="details">
					<span>Mrs. Rohani Pandit</span>
					<h6>Mechanical Head</h6>
					<div class="star">
						
						<span>M.Tech(IIT Bombay)</span>
					</div>
				</div>
				<div class="cost" style="font-size: 12px;">3+ Patents</div>
			</div>

		

			
		</div>
	</section>
	<!-- Courses section ends from here -->


	<!-- Registration section starts from here -->
	<section id="registration">
		<div class="reminder">
			<p>Get Free Scholarship Also</p>
			<h1>Get Details At Campus by Visiting</h1>

			<div class="time">
				<div class="date">50% <br> 95%+ Marks</div>
				<div class="date">30% <br> 90%+ Marks</div>
				<div class="date">20% <br> 80%+ Marks</div>
				<div class="date">10% <br> 70%+ Marks</div>
			</div>
		</div>

		
	</section>
	<!-- Registration section ends from here -->


	<!-- Experts section starts from here -->
	<section id="experts">
		<h1>College Aluminis</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>
		<div class="expert-box">
			<div class="profile">
				<img src="img/pro1.webp" alt="">
				<h6>Rahul Kumar</h6>
				<p>SDE at Google</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro2.webp" alt="">
				<h6>Yash Mittal</h6>
				<p>SDE at Sharechat</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro3.webp" alt="">
				<h6>Piyush Saini</h6>
				<p>Full Stack Developer</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro4.webp" alt="">
				<h6>Ujjawal Pant</h6>
				<p>Design Expert</p>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- Experts section ends from here -->

	<!-- Footer section starts from here -->
	<footer>
		<div class="footer-col">
			<h3>About Us</h3>
			<li>Department</li>
			<li>Placement</li>
			<li>Campus</li>
			<li>Contact Us</li>
		</div>

		<div class="footer-col">
			<h3>Advantage Of Xenon Stack College</h3>
			<li>More Opportunites</li>
			<li>adadfadf afdadf</li>
			<li>adfadfa afda</li>
			<li>Lorem Ipsum</li>
		</div>

		

		<div class="footer-col">
			<h3>Newsletter</h3>
			<p>You can trust us. we only send details regarding collge.</p>

			<div class="subscribe">
				<input type="email" placeholder="Your email Address">
				<a href="#" class="yellow">SUBSCRIBE</a>
			</div>
		</div>

		<div class="copyright">
			<p>
				Copyright @ 2023 All rights reserved | This is made by Praful Gupta 
			</p>
			<div class="pro-links">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
		</div>
	</footer>
	<!-- Footer section ends from here -->

	<script>
		// Show menu links on burger click
		$('#menu-btn').click(function(){
			$('nav .navigation ul').addClass('active')
		});

		// Hide navbar on click function
		$('#menu-close').click(function(){
			$('nav .navigation ul').removeClass('active')
		});
	</script>
</body>
</html>
<?php
}
else {
  header("location: ../index.php");
die("You must be Log in to view this page <a href='../index.php'>Click here</a>");}
?>