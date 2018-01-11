<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbfeedback");
$sql= "INSERT INTO feedback VALUES('".$_REQUEST["reason"]."','".$_REQUEST["describ"]."','".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["em"]."');";
$result = mysqli_query($con,$sql);
mysqli_close($con);
header("Location:CSS.php?err=Thank You!We are happy to here your feedback!");
?>
