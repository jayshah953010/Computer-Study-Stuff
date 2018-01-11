<?php
session_start();
if($_SESSION['login']==false)
{
	setCookie("user",$_REQUEST["email"], time()+3600);
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con, "dbsignup");
	
	$query = 'select * from lsignup where Email="'.$_REQUEST["email"].'"';
	$result = mysqli_query($con, $query);
	
	$query_both = 'select * from lsignup where Email="'.$_REQUEST["email"].'" and Password="'.$_REQUEST["Password_login"].'"';
	$result_both = mysqli_query($con, $query_both);
	
	if(mysqli_num_rows($result)==0) //For Wrong Mail ID
	{
		header('Location:CSS.php?err=Problem_Mail');
	}
	
	else if(mysqli_num_rows($result_both)==1) //For Both is Right
	{
		
		$_SESSION['login']=true;
		$row = mysqli_fetch_array($result);
		$_SESSION['cssuser']=$row['First Name'];
		header("Location:CSS.php");
	}
	else //For Password is Wrong
	{
		mysqli_close($con);
		header("Location:CSS.php?err=Problem_Password");
	}
}
else
{
	$_SESSION['login']=false;
	header("Location:CSS.php");
}
?>

