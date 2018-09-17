<?php 
session_start();
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title>Online/offline</title>
</head>

<body>
	<div class="container">
		<div id="quiz">
			<h1>Online/Offline</h1>
			<div class="question">
				<h3>1. Forestill deg at du har en god venn på internett som vil møte deg i virkeligheten. Han/hun maser veldig mye
					på deg slik at du skal møte vedkommende. Hva hadde du gjort i dette tilfellet?</h3>
				<label><input type="radio" id="q11" name="question1" value="Siden vi er gode venner, ville jeg si ja.">Siden vi er
					gode venner, ville jeg si ja.</label>
				<Br>
				<input type="radio" id="q12" name="question1" value="1">Jeg
				ville sagt nei til den personen siden man kan ikke stole på alle på internett.
				<BR>
				<input type="radio" id="q13" name="question1" value="2">Jeg ville sagt
				je, men tatt med meg en voksen.

				<h3>2. Du har kjent en person i flere måneder nå, denne personen spør om å få se bildet av deg. Denne personen er
					4-5 år eldre enn deg. Ville du sendt vedkommende bilde av deg? </h3>
				<input type="radio" id="q21" name="question2" value="1">Nei, aldri!
				<BR>
				<input type="radio" id="q22" name="question2" value="2">Ja, vi har
				kjent hverandre lenger så hvorfor ikke?
				<BR>
				<input type="radio" id="q23" name="question2" value="3">Jeg
				hadde sendt bilde av noen andre og latet som at det er meg.

				<h3>3. Should it be allowed to design and distribute Freemium* online games for kids?</h3>
				<input type="radio" id="q31" name="question3" value="1">Ja,
				i det minste så er gratis og uansett så burde barn lære seg å kontrollere ønskene sine
				<BR>
				<input type="radio" id="q32" name="question3" value="2">Nei,
				barn burde ikke bli fristet av dyrt elektronisk innhold, som ikke har noen virkelig verdi.
			</div>

			<div id="button">
				<a href="Select.html">Neste</a>
			</div>


			<hr style="margin-top: 100px">
			<footer>
				<p id="progress">Spørsmål x av y</p>
			</footer>
		</div>


		<?php
		$_SESSION["socre"] = $_POST['question1'] + $_POST['question2'] + $_POST['question3'];
		?>
	</div>

</body>

</html>