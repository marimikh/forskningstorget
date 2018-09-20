<?php
session_start();
if (isset($_POST['next'])) {
$_SESSION['score'] = $_POST['question1'] + $_POST['question2'] + $_POST['question3']+$_POST['question4'];
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
		<form action="page3_privacy.php" method="post" id="quiz">

			<h1>Etikk</h1>
			<div class="question">
			<h3><?php echo $_SESSION['score'];?></h3>
				<h3>1. Forestill deg at en som blir mobbet på skolen kommer til deg og spør om de kan være sammen med deg. Hvis du blir venn med denne personen kan alle komme til å le av deg og begynne å mobbe deg også. Hva ville du gjort? </h3>
					<label><input type="radio" id="mc" name="question1" value="1" required> Jeg ville oversett personen og gått bort.</label>
					<br>
					<label><input type="radio" id="mc" name="question1" value="3" required> Jeg ville si ja. Jeg bryr meg ikke om hva andre kommer til å si.</label> 
					<br>
					<label><input type="radio" id="mc" name="question1" value="1" required> Aldri om jeg vil bli venn med en som blir mobbet</label> 

				<h3>2. Hva hadde du gjort når du ser at noen er slemme mot deg eller andre på nettet?</h3>
				<br>
					<img id="innerPic" src="img/msp.jpg">
					<label><input type="radio" id="mc" name="question2" value="3" required> Jeg hadde rapportert det og blokkert henne</label>
					<br>
					<label><input type="radio" id="mc" name="question2" value="1" required> Jeg hadde kranglet tilbake</label> 
					<br>
					<label><input type="radio" id="mc" name="question2" value="2" required> Jeg hadde oversett henne</label> 

				<h3>3. Noen du kjenner har delt dette bildet av seg selv på facebook:</h3>
					<br>
					<img id="innerPic" src="img/mob.jpg">
					<h3>Og noen har skrevet denne kommentaren til dem: </h3>
					<br>
					<img id="innerPic" src="img/mob2.jpg">
					<h3>Ville du tenkt på denne kommentaren som mobbing på nettet?</h3>
					<label><input type="radio" id="mc" name="question3" value="1" required> Nei, denne personen prøver bare å hjelpe den andre personen å se bedre ut.</label>
					<br>
					<label><input type="radio" id="mc" name="question3" value="3" required> Ja, denne kommentaren er ikke hyggelig.</label> 

			</div>
			
			<input type="submit" id="next" name="next" value="next">
			</form>
			<hr style="margin-top: 3em">
		</div>	 
	</div>
</header>
</body>
</html>
