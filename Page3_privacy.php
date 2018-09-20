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
	<title>Personvern</title>
</head>
<body>
<header>
	<div class="container">
		<div id="quiz">
		<form action="resultat.php" method="post" id="quiz">

			<h1>Personvern</h1>
			<div class="question">
				<h3>8. Når man skal dele et bilde på internett. Trenger man å spørre om lov av personene på bildet man deler?</h3>
					<label><input type="radio" id="11" name="question1" value="3" required> 
						Ja, kanskje de ikke liker å dele bilder av seg selv på nettet så jeg bør spørre om det er greit.</label>
					<br>
					<label><input type="radio" id="12" name="question1" value="1"> 
						Nei, hvis jeg vet at personen allerede deler bilder av dem selv på nettet så har de sikkert ikke noe problem med at jeg deler dem også. </label> 
					<br>
					<label><input type="radio" id="13" name="question1" value="2"> 
						Hvis personen bare er i bakgrunnen av bildet så trenger jeg ikke spørre men hvis bildet bare er av denne personen så bør jeg spørre.</label>

				<h3>9. Tanten din er på besøk og vil å legge ut bilde av deg og sine barn sammen. 
				Du vil ikke bli tatt bilde av og vil ikke at det skal bli lagt ut på internett. Hva hadde du gjort?</h3>
				<label><input type="radio" id="21" name="question2" value="3" required> 
					Jeg ville ha vært ærlig og sagt ifra om at jeg ikke vil bli tatt bilde av</label>
					<br>
					<label><input type="radio" id="22" name="question2" value="1"> Jeg hadde ikke tørt å si ifra </label> 
					<br>
					<label><input type="radio" id="23" name="question2" value="1"> 
						Jeg ville ha gjemt meg bak de andre barna, så jeg ble mindre synlig på bildet</label>

				<h3>10. Du har nettopp sett en video på nettet som var veldig voldelig og du syntes at det var ganske ekkelt. Hva gjør du? </h3>
				<label><input type="radio" id="22" name="question3" value="1" required> Jeg sender den videre til en venn. Hvis de ser den også kan vi diskutere den etterpå og kanskje de synes det er kult. </label> 
				<br>
				<label><input type="radio" id="23" name="question3" value="2"> Lukker siden og later som at du ikke så videoen.</label>
				<br>
				<label><input type="radio" id="23" name="question3" value="3"> Sier ifra til noen du stoler på som foreldre eller en lærer.</label>


			</div>
			
			<input type="submit" id="next" name="finish" value="Finish">
			</form>
			<hr style="margin-top: 3em">
			<footer>
				<br>
				<p id="progress">Spørsmål 10 av 10</p>
			</footer>
		</div>	 
	</div>
</header>
</body>
</html>
