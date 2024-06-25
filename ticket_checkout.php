<?php

include 'database.php';

session_start();
require('checksession.php');

$email = $_GET['email'];
$movie_id = $_GET['movie_id'];

$sql1 = "SELECT * from visitors where visitors_email='$email'";
$sql2 = "SELECT * from movies where movie_id='$movie_id'";

$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);

$visitors = mysqli_fetch_array($result1);
$movies = mysqli_fetch_array($result2);

if(isset($_POST['save'])){

$visitors_name = $_POST['visitors_name'];
$visitors_email = $_POST['visitors_email'];
$movie_name = $_POST['movie_name'];
$visitors_number = $_POST['visitors_number'];
$movie_cinema = $_POST['movie_cinema'];
$quantity = $_POST['quantity'];
$seat_class = $_POST['seat_class'];
$ticket_price = $_POST['ticket_price'];
$payment_method = $_POST['payment_method'];
$movie_date = $_POST['movie_date'];
$movie_time = $_POST['movie_time'];
$movie_id = $_POST['movie_id'];


    $sql = "INSERT into bookticket(visitors_name,visitors_email,visitors_number,movie_name,movie_cinema,seat_class,quantity,payment_method,ticket_price,movie_date,movie_time,movie_id) 
    VALUES('$visitors_name','$visitors_email','$visitors_number','$movie_name','$movie_cinema','$seat_class','$quantity',
    '$payment_method','$ticket_price','$movie_date','$movie_time','$movie_id')";
    
    mysqli_query($conn,$sql);

    $email = $_GET['email'];
    
    header('Location:tickets.php?email='.$email);
    
    }




?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
			@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');


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


@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{

}
.container1{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container1{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: linear-gradient(to bottom right, #e3aed6 0%, #4e1a4d 100%);
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: linear-gradient(to bottom right, #e10fad 0%, #ecbfeb 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}

select{
  width: 50%;
  height: 35px;
  padding: 5px 10px;
  margin-bottom: 10px;
}


table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #000000;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

.button{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #ae1889;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
}
.button:hover{
  cursor: pointer;
  background: #F660E1;
}

select,input{
    background: transparent;
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
						<a href=""><img src="assets/img/logo.png" alt="logo" /></a>
					</div>
          <div class="header-right">
						<form action="#" >  
				
							<input type="text"  />
							<button disabled ><i  class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="#"><?php echo $visitors['visitors_name']; ?></a></li>
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
								<li><a href="#"><?php echo $visitors['visitors_name'];?><i class="icofont icofont-simple-down"></i></a>
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
		<br>
		<br>
		


		<div class="container1">
        <div class="title">
            <h2>Fill Detail To Book Ticket</h2>
        </div>
      <div class="d-flex">
        <form style="color:black;" action="" method="post" enctype="multipart/form-data">
          <label>
            <span class="fname">Your Name<span class="required"> * </span></span>
            <input  class="input" type="text" name="visitors_name" value="<?php echo $visitors['visitors_name']; ?>">
          </label>
          <label>
            <span class="lname">Your Email <span class="required"> *</span></span>
            <input class="input" type="email" name="visitors_email" value="<?php echo $visitors['visitors_email']; ?>">
          </label>
          <label>
            <span>Your Number</span>
            <input class="input" type="number" name="visitors_number" value="<?php echo $visitors['visitors_number']; ?>">
          </label>
          <label>
            <span>Movie Name<span class="required"> * </span></span>
            <input class="input" type="text" name="movie_name" placeholder=""  value="<?php echo $movies['movie_name']; ?>" readonly>
          </label>
          <label>
            <span>Cinema<span class="required"> * </span></span>
            <input class="input" type="text" name="movie_cinema" value="<?php echo $movies['movie_cinema']; ?>"  > 
          </label>
          <label>
          <span>Ticket Price <span class="required">  * </span></span>
            <input class="input" type="number" name="ticket_price" value="<?php echo $movies['ticket_price']; ?>"  >
          </label>
		  <br>
          <label>
            <span>Seat Class<span class="required"> * </span></span>
            <select class="input" name="seat_class" id="">
                <option>Box</option>
                <option>Gold</option>
                <option>Platinium</option>
              </select>
          </label>
          <label>
            <span>Show Date <span class="required"> * </span></span>
            <input class="input" type="date" name="movie_date" value="<?php echo $movies['movie_date']; ?>" > 
          </label>
          <label>
            <input class="input" type="number" name="movie_id" value="<?php echo $movies['movie_id']; ?>" hidden> 
          </label>
          <label>
            <span>Show Time <span class="required">  * </span></span>
            <input class="input" type="time" name="movie_time" value="<?php echo $movies['movie_time']; ?>"  > 
          </label>
		  <br>
          <label>
            <span>Quantity<span class="required"> * </span></span>
            <select class="input" name="quantity" id="">
                <option>2 Adult</option>
                <option>1 Adult</option>
                <option>2 Adult 1 Child</option>
                <option>2 Adult 2 Child</option>
                <option>1 Adult 2 Child/option>
                <option>1 Adult 1 child</option>
              </select>
          </label>
		  <br>
		  <label>
		  <span>Payment Method<span class="required">&nbsp;&nbsp;</span></span>
              <select name="payment_method" id="">
                <option>Online</option>
                <option>Movie Wallet</option>
              </select>
          </label>
          <center><button  class="btn btn-danger" name="save">Confirm Ticket</button></center>
		  
		  </form>
       </div>
             
      </div>








<br>
<br>
<br>
<br>
<br>
<br>


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