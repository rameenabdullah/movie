<?php

include 'database.php';

$visitors_name = $_POST['name'];
$visitors_email = $_POST['email'];
$visitors_phone = $_POST['phone'];
$visitors_password = $_POST['password'];

if(isset($_POST['save'])){


$sql = "INSERT into visitors(visitors_name,visitors_email,visitors_number,visitors_password) VALUES('$visitors_name','$visitors_email','$visitors_phone','$visitors_password') ";


// echo "<script>alert('Your Account has been created');</script>";

if(mysqli_query($conn,$sql)){

// echo "Data has been successfully inserted";



header('Location:index.php');



}
else{

    echo "<script>alert('Your Account has not been created, PLEASE TRY AGAIN..!!');</script>";


}


}
// else{

// echo "Please check your button name";

// }

?>