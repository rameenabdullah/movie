<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$query = "SELECT * from admins where admin_email = '$email'";

$res = mysqli_query($conn,$query);

$data = mysqli_fetch_array($res);

// echo "WELCOME ".$data['admin_name'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  *{
    margin: 0;
    padding: 0;
}
header{
    background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(images/mobi.jpg);
    height: 91vh;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.welcome-text{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 0% 30%;
    text-align: center;
}
.welcome-text h1{
    text-align: center;
    color: #EA090F;
    text-transform: uppercase;
    font-size: 40px;
    font-family: Copperplate, Papyrus, fantasy;
}
.lo{
  height:50%;
}

/*resposive*/

@media (max-width:800px){
    .wrapper {
width: 100%;
}
.lo {
width: 25%  ;
}
    .welcome-text {
width: 100%;
height: auto;
margin: 50% 0;
}
    .welcome-text h1 {
font-size: 50px;
}
}

</style>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #b183f6 ;">
  <div class="container-fluid"> 
    <a id="av" class="navbar-brand" href=""><img width="250px" src="images/admin.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="ab"  class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_home.php?email=<?php echo $_GET['email']; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Movie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="view_movie.php?email=<?php echo $_GET['email']; ?>">View Movie</a></li>
            <li><a class="dropdown-item" href="add_movie.php?email=<?php echo $_GET['email']; ?>">Add Movie</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="admin_detail.php?email=<?php echo $_GET['email']; ?>">Admin Details</a></li>
            <li><a class="dropdown-item" href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="visitors_detail.php?email=<?php echo $_GET['email'];?>">Visitors Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="book_ticket.php?email=<?php echo $_GET['email'];?>">Book Tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="concession_req.php?email=<?php echo $_GET['email'];?>">kids Concession</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
          <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
          </svg>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?php echo $data['admin_name']; ?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" color="blue" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg></a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>


<header>

<div class="welcome-text">
        <h1>
        <img class="lo" src="assets/img/mobo.png" alt="">
        <?php echo "WELCOME   ".$data['admin_name']; ?> <svg xmlns="http://www.w3.org/2000/svg" width="56" height="58" color="blue" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
      </h1>

    </div>
</header>
















</body>
</html>