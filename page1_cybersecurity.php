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
		<form action="Page2_mobbing.php" method="post" id="quiz">

			<h1>Cybersecurity/Comment</h1>
			
			<div class="question">
				<h3>1. Her ser du en mail, som sier at dersom du trykker på linken under så vil du tjene gratis penger. Ville du trykket på linken under for å tjene gratis penger? </h3>
				<br>
				<img id="innerPic" src="img/mail.jpg">
				<label><input type="radio" id="q11" name="question1" value="2" required> Nei, siden jeg vet ikke hvem det er fra. Og det kan være fake email for å hacke meg.</label>
				<br>
				<label><input type="radio" id="q12" name="question1" value="1" required> Ja, hvem vil ikke tjene gratis penger.</label>
				<br>
				<label><input type="radio" id="q13" name="question1" value="1" required> Jeg ville trykket på linken for å se hvordan man kan få gratis penger. </label>

				<h3>2. Er dette gode passord du kunne brukt på dine kontoer? 123456, passord, 12345, qwerty, dragon, monkey, letmein, abc123, batman, trustno1?</h3>
				<label><input type="radio" id="q21" name="question2" value="1" required> Ja, de er enkle å huske og noen av dem er morsomme og smarte</label>
				<br>
				<label><input type="radio" id="q22" name="question2" value="2"> Nei, disse passordene er for enkle å gjette</label>

				<h3>3. Du har tenkt til å bli medlem av en ny nettside som alle på skolen sier er kul. På registrerings siden ber de deg om å skrive inn adressen din, kortnummeret ditt og telefonnummeret ditt. Hva ville du gjort?</h3>
				<label><input type="radio" id="q31" name="question3" value="1" required> Jeg skriver inn informasjonen. Vennene mine har jo gjort det så det er nok trygt. </label>
				<br>
				<label><input type="radio" id="q32" name="question3" value="2"> Det virker litt skummelt å skrive inn all den informasjonen så jeg spør foreldrene mine om det først</label>

				<h3>4. Vennen din tilbød deg passordet og brukernavnet sitt, til en trygg nettside som dere begge bruker. Hva ville du gjort?</h3>
				<label><input type="radio" id="q41" name="question4" value="2" required> Jeg holder det hemmelig og vil ikke bruke det til å logge inn uten lov av vennen min.</label>
				<br>
				<label><input type="radio" id="q42" name="question4" value="1" required> Jeg kan kanskje dele det med noen venner så vi kan tulle litt med vennen som ga meg passordet sitt</label>
				<br>
				<label><input type="radio" id="q43" name="question4" value="3" required> Jeg vil ikke ta det imot og jeg ville sakt ifra til noen om at vennen min deler ut passordet og brukernavnet sitt.</label>
			</div>
			<br>
			<input type="submit" id="next" name="next" value="next">
			</form>

			<hr style="margin-top: 45px">
			<footer>
				<br>
				<p id="progress">Spørsmål 4 av 10</p>
			</footer>
		</div>
	</div>

</body>

</html>