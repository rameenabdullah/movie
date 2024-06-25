<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$query = "SELECT * from visitors where visitors_email = '$email'";

$res = mysqli_query($conn,$query);

$data = mysqli_fetch_array($res);

// echo "WELCOME ".$data['admin_name'];


?>
<!DOCT
<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Movie Booking System</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/chill.png" />
	
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
.item{
    margin: 30px 0px 10px 0px;
	
    padding: 10px;
}

.img{
    width: 400px;
	height: 550px;
	transition: transform 1.5s;
}

.p{
    text-align: justify;
	color:black;
}

.btn{
    margin: 30px 0px 10px 0px;
}

.btn a {
    text-decoration: none;
    border: 1px solid gray;
    padding: 10px 30px 10px 30px;
    background-color: gray;
    color: white;
}

.btn a:hover{
    background-color: transparent;
    color: gray;
}
	
.item:hover{
	
	 transform: scale(1.0); 
	 
}

@media only screen and (max-width: 992px){


.img{
width: 260px;
height: 400px;
}
}
@media only screen and (max-width: 768px){


.img{
width: 150px;
height: 260px;
}




}

.detail{
	font-size: 18px;
	font-family: "Lucida Console", "Courier New";
	color:white;
}

		</style>
	</head>
	<!-- Page loader -->
	<div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
					<a href=""><img src="assets/img/mobo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form action="#" >  
				
							<input type="text"  />
							<button disabled ><i  class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="#"><?php echo $data['visitors_name']; ?></a></li>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
						<ul id="primary-menu">
                                <li><a class="active" href="visitors_home.php?email=<?php echo $_GET['email'];?>">Home</a></li>
                                <li><a href="visitors_movie.php?email=<?php echo $_GET['email'];?>">Movies</a></li>
								<li><a href="show_time.php?email=<?php echo $_GET['email'];?>">Show Time</a></li>
                                <li><a href="kids_concession.php?email=<?php echo $_GET['email'];?>">Kids Concession</a></li>
                                <li><a href="blog.php?email=<?php echo $_GET['email'];?>">News</a></li>
								<li><a href="tickets.php?email=<?php echo $_GET['email'];?>">Ticket Detail</a></li>
								<li><a href="#"><?php echo $data['visitors_name'];?><i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="visitors_profile.php?email=<?php echo $_GET['email'];?>">My Profile</a></li>
										<li><a href="logout.php">Log Out</a></li>
									</ul>
								</li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- portfolio section start -->



		<section class="portfolio-area pt-60">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-6 text-center text-lg-left">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
					    <div class="portfolio-menu">
							<ul>
								<li data-filter="*" class="active">Latest</li>
								<li data-filter=".soon">Comming Soon</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".released">Recently Released</li>
							</ul>
						</div>
					</div>
				</div>
				<hr />


				<div class="container">

<div class="row">

<?php

include 'database.php';

$sql = "SELECT * FROM movies";

$query = mysqli_query($conn,$sql);

while($arr = mysqli_fetch_array($query))
{

?>

<div class="col-5">



<div class="item">
            <div class="">
			<div class="single-portfolio">
										<img class="img" src="<?php echo $arr['movie_pic']; ?>" alt="portfolio" />
										<a href="<?php echo $arr['movie_trailer'];?>" class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
                
            </div>
            <div class="h1">
                <h1><?php echo $arr['movie_name']; ?></h1>
            </div>
            <div class="p">
				<p><a href="more_details.php?movie_id=<?php echo $arr['movie_id']; ?>&email=<?php echo $_GET['email'] ?>" class="detail">More Details</a></p>
			</div>
			<div class="author-review">
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
												<i class="icofont icofont-star"></i>
											</div>
				
											<br>
											<h4>180k voters</h4>
        </div>
        </div>

<?php } ?>

        </div>

		
		</div>


		
		</section><!-- portfolio section end -->

		
		<!-- footer section start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<img src="assets/img/logo.png" alt="about" />
							<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
							<h6><span>Call us: </span>(+880) 111 222 3456</h6>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Legal</h4>
							<ul>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Security</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Account</h4>
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Watchlist</a></li>
								<li><a href="#">Collections</a></li>
								<li><a href="#">User Guide</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter system now to get latest news from us.</p>
							<form action="#">
								<input type="text" placeholder="Enter your email.."/>
								<button>SUBSCRIBE NOW</button>
							</form>
						</div>
                    </div>
				</div>
				<hr />
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 text-center text-lg-left">
							<div class="copyright-content">
								<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
							</div>
						</div>
						<div class="col-lg-6 text-center text-lg-right">
							<div class="copyright-content">
								<a href="#" class="scrollToTop">
									Back to top<i class="icofont icofont-arrow-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Isotope JS -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>

</html>