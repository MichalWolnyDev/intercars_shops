<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h3>Sklepy Intercars w Polsce</h3>
		</div>
		<div class="content">
			<form style="display:flex;flex-direction:column;align-items:center" method="POST" action="">
				<label>Podaj miejscowość<br><input type="text" name="miasto"></label>
				<br>
				<input type="submit" value="Ok">
			</form>



	<?php
		if(isset ($_POST['miasto'])){
			$miasto = $_POST['miasto'];


		$czas = date("H:i");


		$connection = mysqli_connect('localhost','root','','intercars') or die ('Brak polaczenia z serwerem MySQL.<br> Blad: '.mysqli_error());
		mysqli_set_charset($connection,'utf8');

		echo "Polaczyles sie z baza <br><br>";

		$db = mysqli_select_db($connection,'intercars') or die ('Nie moge polaczyc sie z baza danych <br> Blad: '.mysqli_error());

		$zap = 'select * from sklepy where miasto like "'.$miasto.'"';

		$wynik = mysqli_query($connection,$zap) or die ('Blad zapytania');
		echo "<table class='adresTable'>";
		if(mysqli_num_rows($wynik)>0){
			echo "<p class='headTab'>Sklepy w mieście: ".$miasto."</p>";
			echo "<tr>";
			echo "<th>Adres</th>";
			echo "<th>Godzina otwarcia</th>";
			echo "<th>Godzina zamkniecia</th>";
			echo "<th>Otwarte/Zamkniete</th>";
			echo "</tr>";
			while($tab = mysqli_fetch_array($wynik)){
				echo "<tr>";
				echo "<td>".$tab['adres']." ".$tab['miasto']."</td>";
				echo "<td>".$tab['Godz_otwarcia']."</td>";
				echo "<td>".$tab['Godz_zamkniecia']."</td>";
				if($czas >= $tab['Godz_otwarcia'] && $czas < $tab['Godz_zamkniecia']){
					echo "<td class='open'>Otwarte</td>";
				}
				else{
					echo "<td class='close'>Zamkniete</td>";
				}
				echo "<tr>";

			}
		}

		else{
			echo "Nie ma takiego miasta w bazie<br>";
			echo "Dodaj je<br><br>";
			echo "<form method='POST' action='addShop.php'>";
			echo "<label>Miasto<br><input type='text' name='city'></label>";
			echo "<label><br>Adres<br><input type='text' name='adres'></label>";
			echo "<label><br>Godzina otwarcia<br><input type='text' name='godz_otw'></label>";
			echo "<label><br>Godzina zamkniecia<br><input type='text' name='godz_zam'></label>";
			echo "<br><input type='submit' value='Ok'>";
			echo "</form>";
		}

		echo "</table>";
		echo "<hr>";
		mysqli_close($connection);

		}

	?>
		</div>
	</div>
</body>
</html>
