<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"css");
$Email=$_REQUEST["mail"];
//$sql1="DELETE FROM lsignup WHERE Email='".$Email."'";
//$result1 = mysqli_query($con,$sql1)or die (mysqli_error($con));

print_r($_FILES);
echo $_FILES["img1"]["tmp_name"];
$photo_name=$_FILES['img1']['name'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"pphoto/".$photo_name);
/*$sql= "INSERT INTO lsignup VALUES('".$_REQUEST["fn"]."','".$_REQUEST["ln"]."','".$Email."','".$_REQUEST["pwd"]."','".$_REQUEST["fpwd"]."','".$_REQUEST["ans_fpwd"]."','".$photo_name."','".$_REQUEST["in"]."','".$_REQUEST["sem"]."');";
$result = mysqli_query($con,$sql)or die (mysqli_error($con));
mysqli_close($con);*/


$sql= "UPDATE lsignup SET First_Name='".$_REQUEST["fn"]."',Last_Name='".$_REQUEST["ln"]."',Password='".$_REQUEST["pwd"]."',Security_Que='".$_REQUEST["fpwd"]."',Security_Ans='".$_REQUEST["ans_fpwd"]."',pphoto='".$photo_name."',Collage='".$_REQUEST["in"]."',Semester='".$_REQUEST["sem"]."' WHERE Email='".$Email."'";
$result = mysqli_query($con,$sql)or die (mysqli_error($con));

session_start();
$_SESSION['cssuser']=$_REQUEST["fn"];
mysqli_close($con);
header("Location:CSS.php?err=Profile channged!");

?>