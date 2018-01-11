<html>
<head>
	<title>Feedback Form</title>
    <link rel="icon" href="images/images.jpg" />
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_feedback.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>

<body onLoad="page('feedback')">

<?php include('header.php');?>
<div class="body">
<div class="paper_feedback">
<div class="form_feedback1">
<form action="reg_feedback.php" class="form_feedback1" method="post">
<h1>Feedback Form</h1>
<p><b>We would love to hear your thoughts, concerns or problems with</b></p><p><b>anything so we can improve!</b></p>
<p>------------------------------------------------------------------------------------</p>
<h3>Feedback type:</h3>
<input type="radio" name="reason" value="Comment">Comments</input>&nbsp;&nbsp;<input type="radio" name="reason" value="Bug Report">Bug Reports</input>&nbsp;&nbsp;<input type="radio" name="reason" value="Question">Questions?</input><br /><br />
<h3>Describe Feedback:</h3>
<textarea rows="6" cols="45" name="describ" required></textarea>
<h3>Name:</h3>
<input type="text" size="15" placeholder="First Name" name="fn" required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" placeholder="Last Name" name="ln" required/>
<h3>E-mail:</h3> 
<input type="text" size="15" placeholder="Email-id" name="em" required/><br /><br /><br /><br />
<input type="submit" name="submit" value="Submit" class="submit_feedback"/>
</form>
</div>
</div>
</div>
<?php include('footer.php');?>


</body>
</html>