<?php

		header("refresh:3;url=index.php");

		echo "<link rel='stylesheet' href='style.css'>";
		echo "<div class='backToHome'>";
		if(
		isset ($_POST['city']) && isset ($_POST['adres']) &&
		isset ($_POST['godz_otw']) && isset ($_POST['godz_zam']) &&
		!empty ($_POST['city']) && !empty ($_POST['adres']) &&
		!empty ($_POST['godz_otw']) && !empty ($_POST['godz_zam'])){


		$connection = mysqli_connect('localhost','root','','intercars') or die ('Brak polaczenia z serwerem MySQL.<br> Blad: '.mysqli_error());
		mysqli_set_charset($connection,'utf8');

		$city = $_POST['city'];
		$address = $_POST['adres'];
		$go = $_POST['godz_otw'];
		$gz = $_POST['godz_zam'];
		$sendToDb = 'insert into sklepy (miasto,adres,Godz_otwarcia,Godz_zamkniecia) values ("'.$city.'","'.$address.'","'.$go.'","'.$gz.'")';

		if(mysqli_query($connection,$sendToDb)){
			echo "<p>Dodano do bazy</p>";
			echo "<br>";
		}
		else{
			echo "Blad ".$sendToDb."<br>".mysqli_error($connection);
		}



		echo "<h3>Poczekaj 3 sekundy lub <br>kliknij </h3>";
		echo "<br><a href='index.php'>Wróc na strone główną</a>";

	}
	else{

		echo "<div class='daneError'><h3>NIE PODANO DANYCH, TRWA POWROT DO STRONY GLOWNEJ</h3></div>";
	}
		echo "</div>";

?>
