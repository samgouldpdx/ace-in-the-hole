<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ace in the Hole Multisport Events</title>
	<link rel="stylesheet" href="styles/styles.css">
	<script type="text/javascript"></script>
</head>
<body>
	<main>	
		<header><img src="images/logo.png" width="800" height="200"></header>

		<?php include("includes/nav.php"); ?>


		<h2>Contact us!</h2>


		<form method="post" name="contactform" action="submitcontact.php">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required="">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" required="">
			<p>Question or Comment:</p>
			<textarea id="message" name="message" rows="10" required=""></textarea>
			<div id="role">
				<p>Please choose one:</p>
				<select id="cars" name="cars">
					<option value="athlete">Athlete</option>
					<option value="volunteer">Volunteer</option>
					<option value="interested">Interested Party</option>
				</select>
			</div>
			<section>
				<p id="register-error"></p>
			</section>
			<button id="contactform-submit" name="go" type="submit">Send</button>
		</form>
		
	</main>
	<br>
	<br>
	<footer class="footer">Copyright &copy; 2020 Ace in the Hole Multisport Events</footer>
</body>
</html>