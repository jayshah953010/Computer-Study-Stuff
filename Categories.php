<html>
<head>
	<title>Computer Study Stuff</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_cat.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>

</head>

<body onLoad="page('categories')">

<?php include('header.php');?>

<div class="body">
<div class="paper_categories">
<?php 
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con, "dbsignup");
	$cat = 'select * from categories where SID=0';
	$result_cat = mysqli_query($con, $cat);
	
	while($row_cat = mysqli_fetch_array($result_cat))
	{
	echo '<ul>'.$row_cat["CNAME"].'</ul>';
	$sub='select * from categories where SID='.$row_cat["CID"].'';
	$result_sub=mysqli_query($con,$sub);
		while($row_sub=mysqli_fetch_array($result_sub))
		{
		echo '<li><a href="Categories.php?id='.$row_sub["CID"].'">'.$row_sub["CNAME"].'</a></li>';
		}
	}
?>
</div>

<div class="paper_item">
<?php
	if(!isset($_GET["id"]))
	{
		echo '<p>Select Categories From Ridht Side....</p>';
	}
	else
	{
	$item='select * from item where CID='.$_GET["id"].'';
	$result_item=mysqli_query($con,$item);
	if(mysqli_num_rows($result_item)==0)		{	header('Location:PNF.html?');	}
	
	$cat='select * from categories where CID='.$_GET["id"].'';
	$result_cat=mysqli_query($con,$cat);
	$row_cat=mysqli_fetch_array($result_cat);
	echo '<p class="categories_heading">'.$row_cat["CNAME"].'</p>';
	
	while($row_item=mysqli_fetch_array($result_item))
	{
		echo 
		'<div class="item_div">
		<p class="item_header_text">'.$row_item["INAME"].'</p>
		<a href="Download_Process.php?id='.$row_item["IID"].'" class="download">Download</a>
		<p class="item_info_text">Description:</p>
		<p class="item_info_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>';
		
	}
	}
?>
</div>
<?php include('footer.php');?>

</body>
</html>