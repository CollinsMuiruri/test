<?php 

session_start();

$con = mysqli_connect('localhost','root','wildgoosechase');

mysqli_select_db($con, 'hotel');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:index.php');
}else{
    header('location:login.php');
}
?>