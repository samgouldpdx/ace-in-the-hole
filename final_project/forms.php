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


		<div id="content">
			<h2>Starting Times</h2>
			<h3>Saturday</h3>
			<ul>
				<li>Long Course Triathlon</li>
				<li>7:00 AM</li>
				<li>Olympic Triathlon</li>
				<li>7:30 AM</li>
				<li>10K</li>
				<li>7:15 AM</li>
				<li>Half Marathon</li>
				<li>7:15 AM</li>
			</ul>
			<h3>Sunday</h3>
			<ul>
				<li>Sprint Triathlon</li>
				<li>8:00 AM</li>
				<li>Try-a-Tri</li>
				<li>8:20 AM</li>
				<li>Splash n Dash</li>
				<li>12:00 PM</li>
			</ul>

			<h2>Registration and Course Details</h2>
			<p>WATER TEMPERATURE is expected to be between 62 & 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

			<h3>Long Course - $240</h3>
			<p>Long Course SWIM - 1.2mi</p>
			<p> Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

			<p>Long Course BIKE - 58 Miles</p>
			<p> A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>

			<p>Long Course RUN - 13.1mi</p>
			<p> A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

			<h3>Olympic Course - $110</h3>
			<p>OLYMPIC SWIM - 1,500 meters</p>
			<p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

			<p>OLYMPIC BIKE - 28mi</p>
			<p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>

			<p>OLYMPIC RUN - 10K</p>
			<p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

			<h3>Sprint - $90</h3>
			<p> Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

			<h3>Try-A-Tri - $65</h3>
			<p> This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

			<h3>Half Marathon - $75</h3>
			<p>(13.1-miles)</p>
			<p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>

			<h3>10k Course - $50</h3>
			<p> The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

			<h3>Splash n' Dash</h3>
			<p> Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>

			

			<h3>Cost Includes</h3>

			<ul>
				<li>Food & Beer</li>
				<li>Access to the weekend's live entertainment & Fitness Expo</li>
				<li>Commemorative Finisher medal</li>
				<li>Accurate Chip Timing for competitive races</li>
				<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
				<li>Post-event party & entertainment</li>
			</ul>
			<p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
		</div>
		<h2>Registration Form</h2>
		<form method="post" id="registration-form" name="registration" action="forms.php">
			<p>Please fill in the information below:</p>
			<label for="name">Full Name:</label>
			<input type="text" name="name" id="name" required="">
			<label for="age">Age:</label>
			<input type="number" name="age" id="age" required="">

			<p>Click one to register:</p>
			<select>
				<option value=""></option>
				<option value="athlete">Athlete</option>
				<option value="volunteer">Volunteer</option>
			</select>
			<br>	
			<br>
			<label for="email">Your Email:</label>
			<input type="text" name="email" id="email" required="">
			<br>

			<label for="emergency-name">Emergency Contact Name:</label>
			<input type="text" name="emergency-contact" required="">
			<br>
			<label for="emergency-number">Emergency Contact Number:</label>
			<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
			<br>
			<label for="gender">Gender Identification (Female, Male, or Non-binary):</label>
			<input type="text" name="gender" required="">
			<br>
			<label for="sat-events">Saturday Events Registering for:</label>
			<select id="events" name="events">
				<option value=""></option>
				<option value="long">Long Course Triathlon</option>
				<option value="olympic">Olympic Triathlon</option>
				<option value="run">10K</option>
				<option value="half">Half Marathon</option>
			</select>
			<br>
			<label for="sun-events">Sunday Events Registering for:</label>
			<select id="events" name="events">
				<option value=""></option>
				<option value="sprint">Sprint Triathlon</option>
				<option value="try">Try-a-Tri</option>
				<option value="splash">Splash n Dash</option>
			</select>
			<br>
			<label for="accommodations">Any Special Accomodations needed?</label>
			<br>
			<textarea id="accommodations" name="message" rows="10"></textarea>
			<section>
				<p id="register-errors"></p>
			</section>
			<button id="contactform-submit" type="submit">Send</button>
		</form>
		<div id="content">
			<h2>Packet Pick Up</h2>
			<p class="pick-up">All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. 
				<p class="pick-up">Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
				<div id="content">
				</main>
				<footer>Copyright &copy; 2020 Ace in the Hole Multisport Events</footer>
			</body>
			</html>