<?php
session_start();
$_SESSION['score_final'] = $_SESSION['score2']+ $_POST['question1'] + $_POST['question2'] + $_POST['question3'];

	if (isset($_POST['finish'])){
    echo $_SESSION['score_final'];
        if ($_SESSION['score_final']<12) {
            echo "You are a gazelle";}
        elseif($_SESSION['score_final']>=12 && $_SESSION['score_final']<21){
            echo "You are a monkey";}
        else { echo "You are an elephant";}
	}		
?>