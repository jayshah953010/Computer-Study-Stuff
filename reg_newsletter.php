<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"newsletter");
$sql = "INSERT INTO newsletter_reg VALUES('".$_REQUEST["em"]."');";
$result = mysqli_query($con,$sql);
mysqli_close($con);
header("Location:CSS.php?err='Reg done!'");
?>
