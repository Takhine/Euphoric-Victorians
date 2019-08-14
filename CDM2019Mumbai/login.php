<?php
session_start();
$con=mysqli_connect('localhost','euphori1_maddy','maddyhostripples');

mysqli_select_db($con,'euphori1_session');

$name=$_POST['username'];
$password=$_POST['password'];

$query="select * from signin where username ='$name' && password = '$password'";

$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$name;
    header('location:instructions.php');
    
}
else{
    header('location:index.php');

}
?>