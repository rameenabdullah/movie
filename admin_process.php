<?php

include 'database.php';

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];


if(isset($_POST['save'])){


$sql = "INSERT into admins(admin_name,admin_email,admin_password) VALUES('$admin_name','$admin_email','$admin_password') ";


// echo "<script>alert('Your Account has been created');</script>";

if(mysqli_query($conn,$sql)){

// echo "Data has been successfully inserted";

$email = $_GET['email'];

header('Location:admin_detail.php?email='.$email);



}
else{

    echo "<script>alert('Your Account has not been created, PLEASE TRY AGAIN..!!');</script>";


}


}
// else{

// echo "Please check your button name";

// }

?>