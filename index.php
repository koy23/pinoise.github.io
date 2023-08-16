<html>

<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	
	<div class="content-wrapper">
		<div class="header">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#register">Register</a></li>
				<li><a href="#about">About</a></li>
			</ul>
		</div>
		<div class="header-banner">
			<div class="brand">
			</div>
			<div class="email-body two automargin">
				<form action="loginchk.php" method="POST">
					<div>
						<input type="text" name="user" placeholder="Username" />
					</div>
					<div>
						<input type="Password" name="pass" placeholder="Password" />
					</div>
					<div>
						<input type="submit" value="Login" / class="button-design">
					</div>
				</form>
			</div>
		</div>
		<div class="section-body">
				<div class="">
					<div class="email-qoute automargin" id="register">
					</div>
					<div class="email-body automargin">
						<form action="regprocess.php" method="POST">
							<div>				<p align="center" style="">Or </p>
													<p align="center">Register your account here </p>

								<input type="text" name="name" placeholder="Your Name" />
							</div>
							<div>
								<input type="text" name="nick" placeholder="Your Nickname / Username" />
							</div>
							<div>
								<input type="Password" name="pass" placeholder="Your Password" />
							</div>
							<div>
								<input type="Password" name="pass2" placeholder="Confirm Password" />
							</div>
							<div>
								<input type="submit" value="Register" class="button-design" />
							</div>
							<div class="exp-pos">Already Have An Account? Click: <a href="index.php" >HERE</a></div>
						</form>
					</div>
					<p class="clear">
					</p>
		</div>
		<div class="section with-bg">
			<div class="section-header" id="about">
				About Us :
			</div>
			<div class="section-body">

				<div class="exp-cont">
					<div class="exp-main">
						<div class="exp-comp">Pinosie Tambayan</div>
						<div class="exp-pos">Usapang Bahay</div><br><br>
					</div>
					<div class="exp-detail">
						Welcome to pinoise Tambayan where you can find friends, chatmates  and manymore.It serves to allow individual users to connect with friends in a simple, shorthanded 	manner, sharing thoughts and news with them.
					</div>
					<p class="clear">
					</p>
				</div>

				<div class="exp-cont">
					<div class="exp-main">
						<div class="exp-comp">FACEBOOK</div>
						<div class="exp-pos"pinosieTambayan</div>
						<div class="exp-date">@gmail.com</div>
						<div class="socialmedia-logo"><img src="image/fb.png"></div>
					</div>
					<div class="exp-detail">
						For any feedbacks please feel free to email us on facebook.Thank you!
					</div>
					<p class="clear">
					</p>
				</div>
				
				<div class="exp-cont">
					<div class="exp-main">
						<div class="exp-comp">Developer's Information</div>
						<div class="exp-pos">Carandang, Jericho</div>
						<div class="exp-pos">Marasigan, Dan Clarence</div>
						<div class="exp-pos">Escoto, Alyza Marie</div>
						<div class="exp-date">BSCS 4-A</div>
					</div>
					<div class="exp-detail">
						Click Here : <a href="developer.php#developer">Developer' s Information</a>
					</div>
					<p class="clear">
					</p>
					<br><br><br>
				
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="footer-rights automargin">
				Copyright &copy; Jericho, Dan, Alyza BSCS 4-A  - All Rights Reserved 2018 
			</div>
		</div>
	</div>
	

</body>

</html>