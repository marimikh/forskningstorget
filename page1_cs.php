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
		<form action="page2_cs.php" method="post" id="quiz">

			<h1>Cybersecurity I</h1>
			<div class="question">
				<h3>1. Alle disse passordene er på  topp 10 verste passord 2017 listen. Hvilket er det minst sikre av dem?</h3>
				<label><input type="radio" id="q11" name="question1" value="3" required> 123456</label>
				<br>
				<label><input type="radio" id="q12" name="question1" value="2" required> Password</label>
				<br>
                <label><input type="radio" id="q13" name="question1" value="1" required> 12345</label>
                <br>
				<label><input type="radio" id="q14" name="question1" value="2" required> Qwerty</label>

				<h3>2. Hva er Phishing?</h3>
                <label><input type="radio" id="q21" name="question2" value="3" required> Å sende falske mailer for å lure folk 
                til å avsløre personlig informasjon som passord eller kort-informasjon.</label>
				<br>
                <label><input type="radio" id="q22" name="question2" value="1"> Et online spill der man prøver å fange så mange 
                fisk som mulig på kortest mulig tid uten å miste sluken eller gå tom for agn.</label>
                <br>
                <label><input type="radio" id="q23" name="question2" value="1"> Online reklame for å fange inn så mange kunder som mulig.</label>
                <br>
                <label><input type="radio" id="q24" name="question2" value="2"> Falsk reklame hvor det du trykker på tar deg til en helt annen side enn det 
                du trodde du kom til å havne på.</label>

				<h3>3. Du mottar en epost som inneholder en link eller et vedlegg når du er på jobb. Det er fra noen du ikke vet hvem er. Hva gjør du?</h3>
				<label><input type="radio" id="q31" name="question3" value="1" required> Klikker på linken eller vedlegge for å se hva det er, det kan jo bare være noe jobbrelatert.</label>
				<br>
				<label><input type="radio" id="q32" name="question3" value="2"> Overser eposten og klikker ikke på noenting. Hvis det er vikrtig sender de vel en ny epost. </label>
                <br>
				<label><input type="radio" id="q33" name="question3" value="1"> Videresender eposten til de andre på jobben, kanskje de vet hvem avsenderen er? </label>
                <br>
                <label><input type="radio" id="q34" name="question3" value="3"> Kontakter noen fra tech support. Kanskje de kan si meg om det er trygt å åpne den? </label>
                
			</div>
			<br>
			<input type="submit" id="next" name="next" value="next">
			</form>

			<hr style="margin-top: 45px">
			<footer>
				<br>
				<p id="progress">Spørsmål 3 av 9</p>
			</footer>
		</div>
	</div>

</body>

</html>