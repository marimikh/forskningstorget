<?php 
session_start();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_p2.css">
	<title>Online/offline</title>
</head>
<body>
<header>
	<div class="container">
		<div id="quiz">
		<form action="Page2_etikk.php" method="post" id="quiz">

			<h1>Cybersecurity</h1>
			<div class="question">
				<h3>1. Her ser du en mail, som sier at dersom du trykker på linken under så vil du tjene gratis penger. Ville du trykket på linken under for å tjene gratis penger? </h3>
				<label><input type="radio" id="q11" name="question1" value="2" required> Nei, siden jeg vet ikke hvem det er fra. Og det kan være fake email for å hacke meg.</label>
				<br>
				<label><input type="radio" id="q12" name="question1" value="1" required> Ja, hvem vil ikke tjene gratis penger.</label>
				<br>
				<label><input type="radio" id="q13" name="question1" value="1" required> Jeg ville trykket på linken for å se hvordan man kan få gratis penger. </label>

				<h3>2. Are these good ideas for passwords: 
					123456, password, 12345, qwerty, baseball, dragon, monkey, letmein, abc123, batman, trustno1? </h3>
				<label><input type="radio" id="q21" name="question2" value="1" required> Yes, they are easy to remember and some of them are very ironic and  smart</label>
				<br>
				<label><input type="radio" id="q22" name="question2" value="2"> No, these passwords are very easy to guess. Your will be hacked in no time!</label>

				<h3>3. You are about to join a new website that your friends at school say is really cool. At the registration you are asked to provide your home address/credit card number/ home phone number. What would you do in this situation?</h3>
				<label><input type="radio" id="q31" name="question3" value="1" required> I will provide all the information. My friends did, so it must be safe </label>
				<br>
				<label><input type="radio" id="q32" name="question3" value="2"> It seems like it might be dangerous to provide such information. I think it would be better to ask my parents about it</label>
			</div>
			<br>
			<input type="submit" id="next" name="next" value="next">
			</form>

			<hr style="margin-top: 100px">
			<footer>
				<p id="progress">Spørsmål 3 av 9</p>
			</footer>
		</div>
	</div>

</body>

</html>