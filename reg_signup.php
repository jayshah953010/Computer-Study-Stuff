<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbsignup");
$sql= "INSERT INTO lsignup VALUES('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["em"]."','".$_REQUEST["pwd"]."','".$_REQUEST["img"]."','".$_REQUEST["in"]."','".$_REQUEST["sem"]."');";
$result = mysqli_query($con,$sql);
mysqli_close($con);
header("Location:CSS.php?err=Registration done! you may login now");
?>
