<html>

<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	
	<div class="content-wrapper">
		<div class="header">
			<ul>
				<li><a href="dashboard.php">Home</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="logout.php">Signout</a></li>
			</ul>
		</div>
		<div class="header-banner-dashboard">
			<div class="brand">

			</div>
		</div>
		<div>
			
			<div class="section-body two">
				<div class="email-body">
					<div class="email-qoute width100p">
					Hello 
					<?php 
						session_start();
						echo $_SESSION['username'];
					?>
					, Post Your Message Here !
					</div>
					<form action="postmsg.php" method="POST">
						<div>
							<textarea name="msg" rows="10" placeholder="Your Message"></textarea>
						</div>
						<div>
							<input type="submit" value="Post Message" class="button-design" />
						</div>
					</form>
				</div>
				<div class="email-qoute overflowscrollbar">
					Posts / Messages :<br><br><br>
					<?php
					$conn = mysqli_connect("localhost","root","","dbchat");

					$query = "SELECT * FROM tblmessage ORDER BY recID DESC";

					$result = mysqli_query($conn,$query);

					if(mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_assoc($result)){
							if($row['PostBy'] == $_SESSION['username']){
								echo "<div class='name left'> You :<br></div>";
								echo "<div class='addborder left you-bg'>" . $row['Posts'] . "<br><br>
									<div class='date center'><b>Date Posted: </b>". $row['PostDate'] . "<br></div>
									</div>";
								echo "<br>";
							}
							else{
								echo "<div class='name right'>" . $row['PostBy'] . " :<br></div>";
								echo "<div class='addborder right other-bg'>" . $row['Posts'] . "<br><br>
									<div class='date center'><b>Date Posted: </b>". $row['PostDate'] . "<br></div>
									</div>";
								echo "<br>";
							}
							
							
						}
					}else{
						echo "NO MESSAGES / POST";
						}



					?>
				</div>
				<p class="clear">
				</p>
			</div>
		</div>

		<div class="section-body two">
				
		</div>
		<div class="footer">
			<div class="footer-rights automargin">
				Copyright &copy; Jericho, Dan, Alyza BSCS 4-A  - All Rights Reserved 2018 
			</div>
		</div>
	</div>
	

</body>

</html>