<?php

include 'database.php';


if(isset($_POST['save'])){

$movie_name = $_POST['movie_name'];
$movie_trailer = $_POST['movie_trailer'];
$ticket_price = $_POST['ticket_price'];
$movie_date = $_POST['movie_date'];
$movie_pic = $_FILES['movie_pic'];
$movie_time = $_POST['movie_time'];
$movie_cinema = $_POST['movie_cinema'];


$filename = $movie_pic['name'];
$filepath = $movie_pic['tmp_name'];
$fileerror = $movie_pic['error'];



if($fileerror == 0){

    $destfile = 'uploads/'.$filename;
    
    move_uploaded_file($filepath,$destfile);
    
    $sql = "INSERT into movies(movie_name,movie_trailer,ticket_price,movie_date,movie_pic,movie_time,movie_cinema) 
    VALUES('$movie_name','$movie_trailer','$ticket_price','$movie_date','$destfile','$movie_time','$movie_cinema')";
    
    mysqli_query($conn,$sql);

    $email = $_GET['email'];
    
    header('Location:view_movie.php?email='.$email);
    
    }


}


?>