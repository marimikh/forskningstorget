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
	<title>Etikk</title>
</head>
<body>
<header>
	<div class="container">
		<div id="quiz">
		<form action="Page3_privacy.php" method="post" id="quiz">

			<h1>Etikk</h1>
			<div class="question">
				<h3>1. Du går på en fest/bursdag eller lignende som du ikke har lov til å gå på av foreldrene dine. Etter den festen er over ser du at folk har lagt ut bilder og tagget deg i bilder du også er med på. Disse bildene kan foreldrene dine også se. Hva ville du gjort i dette tilfellet? </h3>
					<input type="radio" id="mc" name="question1" value="Jeg hadde fjernet tagg fra bilder jeg er tagget i. Også hadde jeg sendt melding til folk om å slette bilder jeg er med på."> Jeg hadde fjernet tagg fra bilder jeg er tagget i. Også hadde jeg sendt melding til folk om å slette bilder jeg er med på.  
					<Br>
					<input type="radio" id="mc" name="question1" value="Jeg hadde bare krysset fingrene og håpet på at mamma, pappa ikke så bildene."> Jeg hadde bare krysset fingrene og håpet på at mamma, pappa ikke så bildene. 
					<BR>
					<input type="radio" id="mc" name="question1" value="Jeg hadde gått til foreldrene mine og sagt sannheten, og beklaget veldig mye for at jeg dro uten deres tillatelse."> Jeg hadde gått til foreldrene mine og sagt sannheten, og beklaget veldig mye for at jeg dro uten deres tillatelse. 

				<h3>2. Synes du at det er greit å legge ut følgende bilde av barnet eller søskenet ditt på sosiale medier.</h3>
					<img id="innerPic" src="img/barn.jpg">
					<input type="radio" id="mc" name="question2" value="Ja, jeg ser ingen problemer med å bruke bilde. Det er en uskyldig, søt og morsomt bilde."> Ja, jeg ser ingen problemer med å bruke bilde. Det er en uskyldig, søt og morsomt bilde. 
					<BR>
					<input type="radio" id="mc" name="question2" value="Nei, jeg tror mitt søsken/barn vil anse det som et flaut bildet senere."> Nei, jeg tror mitt søsken/barn vil anse det som et flaut bildet senere.
					<BR>

				<h3>3. Når du skal legge ut bilder av en person, bør du be om tilatelse først?</h3>
					<input type="radio" id="mc" name="question3" value="Ja, det kan hende vedkommende ikke ønsker at du skal legge ut bilder av han/hun."> Ja, det kan hende vedkommende ikke ønsker at du skal legge ut bilder av han/hun.
					<BR>
					<input type="radio" id="mc" name="question3" value="Nei. Hvis vedkommende legger selv ut bilder av seg selv, så bør det være greit at andre også legger ut av han/henne."> Nei. Hvis vedkommende legger selv ut bilder av seg selv, så bør det være greit at andre også legger ut av han/henne.
					<BR>

			</div>
			
			<input type="submit" id="next" name="next" value="next">
			</form>


			<hr style="margin-top: 3em">
		</div>	 
	</div>
</header>
</body>
</html>
