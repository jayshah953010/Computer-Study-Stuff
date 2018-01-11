<html>
<head>
	<title>Upload File</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/css_ufile.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>
<body onLoad="page('')">

<?php include('header.php');?>
<div class="body">
<div class="paper_ufile">
<div class="wall_start">Upload File</div>
<form action="reg_Ufile.php"  method="post" enctype="multipart/form-data">
<table class="form_ufile">
<tr>
<td>Semester</td>
	<td><select id="semester"  name="sem">
    		<option>-----------Select Semester------------</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
          </select>
    </td>
</tr>
<tr>
<td>Subject</td>
<td><select id="subject" name="sub">


<script language="javascript">
				populateCountries("semester", "subject");
				</script>
</td>
</tr>
<tr>
<td>File Name</td>
<td><input type="text" name="fname" placeholder="Enter File Name"></td>
</tr>
<tr>
<td>Select File</td>
<td><input type="file" name="iname"></td>
</tr>
</table>
<br />
<button type="submit" name="submit" class="submit_ufile">Upload</button>
</form>
</div>
</div>

<?php include('footer.php');?>

<?php
if(isset($_GET["mail"]))
{
echo' 
<script>
alert("'.$_GET["mail"].'"+" is already Used...");
</script>';
}
?>

</body>
</html>
