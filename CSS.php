<html>
<head>
	<title>Computer Study Stuff</title>
    <link rel="shortcut icon" href="img/Logo.png" />
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_home.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_signup-login.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>
<body onLoad="page('home')">

<?php include('header.php');?>

<div class="body">
	<div class="paper_css">
	<h2><marquee scrolldelay="">Welcome to CSS-<b>Computer Study Stuff</marquee></b></h2>
    <p>Hello Dear Friends,</p><p>Here @CSS.com you fill find helpful material for Computer Eng. B.Tech subjects.Like,pdfs, ppts and documents that will help you to learn your subject more easily.</p><p>Don't worry it's totally free,so feel free to use these stuff.<p>And yeah, Please don't forget to write back to us about our site review.</p><p>Go to <a href="Categories.php"><b>Categories</b></a> page for more options. </p>
    </div>
    <div class="paper_login">
    	<div class="login">
    		<form action="login1.php" method="post">
			
			<?php 
			if(session_id() == ''){session_start();}
			if(!(isset($_SESSION['login']))){$_SESSION["login"]=false;}
			
			if($_SESSION['login']==true)
			{
				echo '<h3><center>Hi...'.$_SESSION["cssuser"].'</center></h3>';
				echo "<button id='login' type='submit' class='login_button'>Logout</button>";
			}
			else
			{
            
			echo '<h2><center><font style="text-shadow:-1px -1px 1px #008080">Login</font></center></h2>
			<div>
			<input type="email" name="email" size="25" id="Email_id" placeholder="Email-id" 	value="';
			if(isset($_COOKIE["user"])){ echo $_COOKIE["user"];}
			echo '" required /><p id="MNotice">Incorrect</p>
			</div>
			
			<div style="margin:20px 0px;">
			<input type="Password" name="Password_login" placeholder="Password" size="25" id="Password" required/><p id="PNotice">Incorrect</p>
			</div>

			<a href="Password reset.html" style="color:black"><b>Forgot your password?!</b></a>
<br/><br />
			<button type="submit" name="submit" class="login_button">Login!</button>
<br /><br /><br />
			<a href="signup.php"><font style="color:black"><b>Create New Account/Sign Up</b></font></a>';
            
			if(isset($_GET['err']))
				{ 
					if($_GET['err']=='Problem_Mail')
					{
					echo '<script>
						document.getElementById("MNotice").style.display="block";
						document.getElementById("Email_id").style.border="2px solid #000";
						</script>';
					}
					else if($_GET['err']=='Problem_Password')
					{
					echo '<script>
						document.getElementById("PNotice").style.display="block";						
						document.getElementById("Password").style.border="2px solid #000";
						</script>';
					}
				}
			
			}
			?>
            </form>
            
    	</div>
    </div>
    <div class="paper_newsletter">
        <div class="newsletter">
    		<h2><center>Newsletter</center></h2>
            <form action="reg_newsletter.php" method="post">
            <label>Please enter your email address to subscribe our newsletter.</label><br />
            <pre>
<input type="email" placeholder="Email-id" name="em" size="25" />
                   <button type="submit" name="newsletter_reg" id="newsletter_email" class="newsletter_submit_button"  onClick="Newsletter_Reg" />Register</button>
            </pre>
            </form>
    	</div>
     </div>
</div>
<?php include('footer.php');?>
</body>
</html>