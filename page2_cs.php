<?php
session_start();
if (isset($_POST['next'])) {
$_SESSION['score'] = $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style_p2.css">
	<title>Cybersecurity II</title>
</head>
<body>
<header>
	<div class="container">
		<div id="quiz">
		<form action="page3_cs.php" method="post" id="quiz">

			<h1>Cybersecurity II</h1>
			<div class="question">
				<h3>4. Hvordan kan du identifisere om en nettside eller en link er sikker å trykke på?</h3>
					<label><input type="radio" id="41" name="question1" value="2" required> Nettsiden har https og ikke bare http i adressefeltet.</label>
					<br>
					<label><input type="radio" id="42" name="question1" value="1" required> Det er et lukket hengelås-ikon i adressefeltet.</label> 
					<br>
					<label><input type="radio" id="43" name="question1" value="1" required> Det er ingen skrivefeil eller andre uvanlige elementer i adressen.</label> 
                    <br>
					<label><input type="radio" id="44" name="question1" value="3" required> Alle valgene over.</label> 

				<h3>5. Du mottar en haste-mail fra banken din. Det står at kontoen din har blitt hacket og at penger er blitt tatt ut. 
                    De har lagt ved en fil som forteller akkurat hvor mye og når pengene ble tatt ut. Eposten ber deg om å følge en 
                    link for å tilbakestille passordet ditt umiddelbart for å hindre videre angrep. Hva bør du gjøre?</h3>
                    <label><input type="radio" id="51" name="question2" value="1" required> Følge linken og endre alle detaljene dine med en gang. 
                    Jo lengre du venter jo mer utsatt er du for et nytt angrep.</label>
					<br>
                    <label><input type="radio" id="52" name="question2" value="3" required> Ta kontakt med banken din direkte fra deres nettside eller på telefon 
                    og høre om de har sett noe uvanlig aktivitet.</label> 
					<br>
					<label><input type="radio" id="53" name="question2" value="1" required> Sjekke vedlegget for å forsikre deg om at detaljene ser ekte ut</label> 
                    <br>
                    <label><input type="radio" id="54" name="question2" value="1" required> Sende en epost tilbake til avsender og be om bevis på at det faktisk er
                     banken din du snakker med</label> 

				<h3>6. Du er koblet på et publiic Wi-fi på en kafe og mottar en haste-faktura som du må 
                    betale med en gang. For å gjøre det må du logge inn i banken din. Hva vil du gjøre? </h3>
                    <label><input type="radio" id="61" name="question3" value="1" required> Det er en haste faktura så jeg vil betale den med en gang på wifi nettverket til kafeen. 
                    Ellers kommer jeg bare til å glemme det.</label>
					<br>
                    <label><input type="radio" id="62" name="question3" value="2" required> Å betale den med en gang er det beste, men jeg vil nok bruke mobilen min til å lage en 
                    egen wifi hotspot jeg kan bruke før jeg logger meg inn i nettbanken min.</label> 
                    <br>
                    <label><input type="radio" id="62" name="question3" value="2" required> Jeg ville satt på et varsel om å betale fakturaen så 
                    snart jeg kommer hjem. Jeg bruker bare kjente og sikre nettverk.</label> 

			</div>
			
			<input type="submit" id="next" name="next" value="next">
			</form>
			<hr style="margin-top: 3em">
		</div>	 
	</div>
</header>
</body>
</html>
