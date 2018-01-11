<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"dbcontactus");
$sql = "INSERT INTO contactus VALUES('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$_REQUEST["em"]."','".$_REQUEST["num"]."','".$_REQUEST["sub"]."','".$_REQUEST["msg"]."');";
$result = mysqli_query($con,$sql);
mysqli_close($con);
header("Location:CSS.php?err='Successful!'");
?>
