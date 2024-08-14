<?php 
// echo"working";
// $email=$_GET['Email'];
// $password= $_GET['Password'];
// echo "Your email is $email";
// echo"<br>";
// echo "Your Password is $password";
$hostname="localhost";
$db_username="root";
$db_password="root";
$db_name="hungry_hippo";

$conn=mysqli_connect($hostname,$db_username,$db_password,$db_name);

$expirydate=$_GET["expiryDate"];
$name=$_GET["name"];
$imageURL=$_GET["imageURL"];

$date=date("Y-m-d");//Date Format should be : YYYY-MM-DD
$sql="INSERT INTO foods(name,expiryDate,imageURL) values('$name','$expirydate','$imageURL')";
$result=mysqli_query($conn, $sql);
if(!$result){
    die("Something went wrong");
}
//echo"data added";
header("Location:/");

?>