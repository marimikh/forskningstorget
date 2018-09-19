<?php 
include ('db.php')?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title>Skjema</title>
</head>

<body>
	<form action="Page1.php" method="post" id="skjema">
	<header>
		<h1>Velg ... </h1>
		<p>1. Hva er din alder?<br>
			<select name="age">
				<?php
					for ($i=1; $i<=100; $i++)
					{
						?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php
					}
				?>
				</select>

		<p>2. Velg ditt kjønn<br>
			<select name="gender">
				<option value="female">Jente</option>
				<option value="male">Gutt</option>
				<option value="other">Annet</option>
			</select>
		</p>

		<p>3. Din yrke<br>
			<select name="occupation">
				<option value="1">Barn, skole og undervisning</option>
				<option value="2">Butikk og varehandel</option>
				<option value="3">Bygg og anlegg</option>
				<option value="4">Forskning, utdanning og vitenskap</option>
				<option value="5">Helse og omsorg</option>
				<option value="6">Hotell og overnatting</option>
				<option value="7">Industri og produksjon</option>
				<option value="8">Konsulent og rådgivning</option>
				<option value="9">Matvareproduksjon og -industri</option>
				<option value="10">Offentlig administrasjon</option>
				<option value="11">Olje og gass</option>
				<option value="12">Restaurant, mat og uteliv</option>
				<option value="13">Student</option>
				<option value="14">Transport og logistikk</option>
				<option value="15">Økonomi og regnskap </option>
				<option value="16">Annet</option>
			</select>
		</p>
		<input type="submit" id="submit" name="submit" value="submit">
	</form>

	<?php
if (isset($_POST['submit'])) {    
	  $age = $_POST["age"];
	  $gender = $_POST["gender"];
	  $occupation = $_POST["occupation"];      
      $sql = "INSERT INTO respondent SET age='".$age."', gender='".$gender."', occupation='".$occupation."'";
         
    $submit_update = mysqli_query($db, $sql);

    if (!$submit_update) {
        echo "</br> Houston, we have a problem";
    } 
}?>
</body>
</html>