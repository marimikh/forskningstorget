<?php
session_start();
$_SESSION['score_final'] = $_SESSION['score2']+ $_POST['question1'] + $_POST['question2'] + $_POST['question3']; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="resStyle.css">
	<title>Etikk</title>
</head>
<body>
<header>
	<div class="container">
	<?php 
	if (isset($_POST['finish'])){
        if ($_SESSION['score_final']<12) {
			echo "<i>Du ble den uforsiktige apekatten. Det er ikke alltid bra å forhaste ting, 
			tenk gjerne en gang eller to, før du legger noe ut på internett. Husk at det er fort gjort 
			å komme borti upassende innhold eller ubehagelige personer. Vær smart når du bruker internett.</i>";
            echo "<img id='innerImg' src='img/gazelle.jpg'/>";
        }
        elseif($_SESSION['score_final']>=12 && $_SESSION['score_final']<21){
			echo "<h1>Du ble den forsiktige<br> koala bjørnen</h1> 
			<br><i>Det er ikke alltid du 
			vet hva som er rett og galt og det hender at du ofte setter deg i skyggen.
			 Det er ingen tvil i at internett er farlig og kaotisk, men husk at det kan være 
			 godt å spørre om hjelp eller råd om du er i tvil.</i>";
            echo "<img id='innerImg' src='img/monkey.jpg'/>";
        }
		else { echo "Du ble den vise elefanten. Du vet akkurat 
			hvordan du skal oppføre deg på internett og vet hvor langt grensene går. 
			Du er en som tenker deg godt igjennom før du gjør en handling og passer på at de rundt deg har det behagelig. 
			Fortsett å vær god som du er!";
               echo "<img id='innerImg' src='img/monkey2.jpg'/>";
            }
	}		
?>
		<hr style="margin-top: 10px">
		<div id="button">
			<a href="quiz.html">Ta på nytt</a>
		</div>
		
	</div>


</header>
</body>
</html>
