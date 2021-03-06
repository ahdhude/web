<!DOCTYPE html>
<?php

	include('php/content_load.php');




?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Comfortaa|Josefin+Sans|Lato|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/content_load.js"></script>

</head>


<body>



	<div class="categories" id="categories">

		<div class="cat-header">
			<h1>Services Offered</h1>

		</div>



<table class="cat-table" >
	<tr>
			<td class="cat-cell" >
				<img src="images/icons/ppsize.png" alt="">
				<p>PP/ID Size Photography</p>

			</td>
		<td class="cat-cell" >
			<img src="images/icons/outdoor.png" alt="">
			<p>OutDoor Photography</p>

		</td>
		<td class="cat-cell" >
			<img src="images/icons/studio.png" alt="">
			<p>Studio Portraits</p>

		</td>

		<td class="cat-cell" >
			<img src="images/icons/passport.png" alt="">
			<p>Passport Services</p>

		</td>

	</tr>

	<tr>
			<td class="cat-cell" >
				<img src="images/icons/photo album.png" alt="">
				<p>Photo Books & Albums</p>

			</td>
		<td class="cat-cell" >
			<img src="images/icons/edit-image.png" alt="">
			<p>Photo Editing</p>

		</td>
		<td class="cat-cell" >
			<img src="images/icons/print.png" alt="">
			<p>Photo Printing</p>

		</td>

		<td class="cat-cell" >
			<img src="images/icons/videography.png" alt="">
			<p>Videography</p>

		</td>

	</tr>
</table>
</div>


<div class="contact-section" id="contact">

	<h1>Contact Us</h1>
	<p>We like to hear from you</p>

<div class="contact-form">
		<form class="contact" action="index.html" method="post">
			<input type="text" name="Name" value="" placeholder="Name">
			<input type="text" name="Email" value="" placeholder="Email"><br>
			<textarea name="Message" rows="8" cols="80" placeholder="Message"></textarea><br>

			<button type="button" name="SendMessage"> Send Message</button>

		</form>

</div>


</div>


<div class="footer">
		<div class="icon-list">

			<ul class="social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>

		</div>
		<div class="copyright">
			<p>© creativestudios.com </p>
		</div>

</div>


<!-- SIGN IN AND SIGN UP HIDDEN -->

<div id="signup" class="modal">
				<span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close ">&times;</span>
				<form class="modal-content" action="php/signup.php" style="border:1px solid #ccc" method="post">
    				<div class="container">
      					<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>
						<hr>
							<label for="Fname"><b>First Name</b></label>
							<input type="text" placeholder="Enter First Name" name="Fname" required>

							<label for="Fname"><b>Last Name</b></label>
							<input type="text" placeholder="Enter Last Name" name="Lname" required>

							<label for="Phone"><b>Phone Number </b></label>
							<input type="text" placeholder="Enter Phone Number" name="Phone" required>

							<label for="Address"><b>Address </b></label>
							<input type="text" placeholder="Address" name="Address" required>

							<label for="Atoll"><b>Atoll </b></label>
							<select required class="Atoll-select" name="Atoll" >
									<option value=""></option>
								<?php  echo fill_atoll($connect); ?>

							</select>

							<br>


							<label for="island"><b>Island </b></label>
							<select required class="Island-select" name="Island" >

								<option value=""></option>


							</select>

							<br>

						  <label for="email"><b>Email</b></label>
						  <input type="text" placeholder="Enter Email" name="Email" required>

						  <label for="psw"><b>Password</b></label>
						  <input type="password" placeholder="Enter Password" name="psw" required>

						  <label for="psw-repeat"><b>Repeat Password</b></label>
						  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

						  <label>
							<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
						  </label>

      					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

						  <div class="clearfix">
							<button type="submit" class="signupbtn">Sign Up</button>
							<button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>

						  </div>
					</div>
				</form>



			</div>

			<div id="login" class="modal">
				<span onclick="document.getElementById('login').style.display='none'" class="close" title="Close"  >&times; </span>
				<form class="modal-content2" action="/action_page.php" style="border:1px solid #ccc">
    				<div class="container">
      					      <label for="uname"><b>Username</b></label>
							  <input type="text" placeholder="Enter Username" name="uname" required>

							  <label for="psw"><b>Password</b></label>
							  <input type="password" placeholder="Enter Password" name="psw" required>

							  <button type="submit">Login</button>
							  <label>
								<input type="checkbox" checked="checked" name="remember"> Remember me
							  </label>
					</div>
				</form>



			</div>


</body>


</html>
