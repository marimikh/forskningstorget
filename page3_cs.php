<?php 
session_start();
if (isset($_POST['next'])) {
$_SESSION['score2'] = $_SESSION['score'] + $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
}?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style_p2.css">
	<title>Cybersecurity III</title>
</head>
<body>
<header>
	<div class="container">
		<div id="quiz">
		<form action="resultat.php" method="post" id="quiz">

			<h1>Cybersecurity III</h1>
			<div class="question">
			<h3><?php echo $_SESSION['score2'];?></h3>
				<h3>7. En login krever både brukernavn, passord og et steg til, feks bruk av en telefon eller en slags dobbelsjekk mot en annen enhet som er 
                    opprettet tidligere og lagt inn som en “trusted unit”. Hva kalles dette ekstra steget?</h3>
					<label><input type="radio" id="71" name="question1" value="3" required> 
                    To-passord-beskyttelse</label>
					<br>
					<label><input type="radio" id="72" name="question1" value="1"> 
                    To-faktor-identifisering</label> 
					<br>
					<label><input type="radio" id="73" name="question1" value="2"> 
                    Dobbel autorisasjon</label>
                    <br>
					<label><input type="radio" id="74" name="question1" value="2"> 
                    To-lags-sikkerhet</label>

				<h3>8. Nesten alle nettsider i dag krever at du registrerer deg og lager et nytt 
					passord for å bruke tjenestene deres. Noen av oss har kanskje mange forskjellige passord vi bruker. 
					Hvordan husker du alle sammen?</h3>
					<label><input type="radio" id="21" name="question2" value="1" required> 
						Jeg hadde aldri klart å lage og huske et nytt passord for alle sidene jeg er registrert på.. Jeg har bare 1 passord som jeg bruker, men det er veldig sterkt. </label>
					<br>
					<label><input type="radio" id="22" name="question2" value="1"> Jeg har for mange passord til å huske alle sammen 
						så jeg skriver dem ned på PC’n min uten at noen vet det. </label> 
					<br>
					<label><input type="radio" id="23" name="question2" value="2"> 
					Jeg har 3 eller 4 passord som jeg bruker på forskjellige grupper av nettsider. Noen av dem er for de viktigste kontoene 
					mine sånn som epost og nettbank mens andre er for online shopping, sosiale nettverk osv. </label>
					<br>
					<label><input type="radio" id="23" name="question2" value="3"> 
					Huske forskjellige passord? Jeg trenger ikke det lenger. Jeg bruker en egen applikasjon som lager passord for meg så jeg kun trenger å bruke master passordet. </label>
					<br>
					<label><input type="radio" id="23" name="question2" value="2"> 
					Jeg har ikke noe problem med å huske alle passordene mine. </label>

				<h3>9. Er det lovlig for arbeidsgivere i Norge å spørre om å få se Facebook siden din eller andre sosiale medier du bruker når de vurderer å ansette deg til en stilling?</h3>
				<label><input type="radio" id="22" name="question3" value="1" required> Selvfølgelig ikke. Det kan telle som invasjon av privatlivet. Det er forbudt i loven.</label> 
				<br>
				<label><input type="radio" id="23" name="question3" value="3"> Ja det er lovlig. Og mange arbeidsgivere gjør nettopp dette når de vurderer å ansette deg.</label>
				<br>
				<label><input type="radio" id="23" name="question3" value="2"> Dette faller innenfor en grå-sone. Det er ingen lov mot at de sjekker deg på sosiale medier, men det er invasjon av privatlivet i en hvis grad. (som man har rett til i loven)</label>


			</div>
			
			<input type="submit" id="next" name="finish" value="Finish">
			</form>


			<hr style="margin-top: 3em">
		</div>	 
	</div>
</header>
</body>
</html>
