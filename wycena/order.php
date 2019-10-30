<!DOCTYPE HTML>
<html>
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110194645-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-110194645-2');
	</script>

	
	<meta charset="utf-8"/>
	<title> Podsumowanie </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<div id="pojemnik">
<?php
	
	echo '<h1 class="naglowek">Twoje zamówienie</h1>';
	$suma = 0;
	$od = "";
	$czesci = "";
	$dyskSSD = "";
	
	if (isset($_POST['installOs']))
	{
		echo '<p> - Instalacja systemu (100 zł) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['czyszczenie']))
	{	
		if(isset($_POST['czyszczeniePoZalaniu']))
		{
			echo '<p> - Czyszczenie układu chłodzenia (Laptop)(0 zł) </p>';
			$suma = $suma+0; 
		}
		else if (isset($_POST['grafika']) || (isset($_POST['gniazda'])) || (isset($_POST['zasilanie'])) || (isset($_POST['naprawaPlyty'])) || (isset($_POST['wymianaBGA'])) || (isset($_POST['naprawaBGA'])) || (isset($_POST['wymianaObudowy'])) ||(isset($_POST['wymianaPlyty'])) || (isset($_POST['wymianaWentylatora'])) || (isset($_POST['wymianaTasmy'])))
		{
			echo '<p> - Czyszczenie układu chłodzenia (Laptop)(30 zł) </p>';
			$suma = $suma+30; 
		}
		else
		{
		echo '<p> - Czyszczenie układu chłodzenia (Laptop)(100 zł) </p>';
		$suma = $suma+100; 
		}
	}
	
	if (isset($_POST['czyszczeniePC']))
	{
		echo '<p> - Czyszczenie układu chłodzenia (PC)(50 zł) </p>';
		$suma = $suma+50; 
	}
	
	if (isset($_POST['szybko']))
	{
		echo '<p> - Usługa expresowa (100 zł) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['haslo']))
	{
		echo '<p> - Odzyskiwanie hasła (od 50 zł) </p>';
		$suma = $suma+50; 
	}
	
	if (isset($_POST['wMatrycy']))
	{
		echo '<p> - Wymiana matrycy (od 60 zł + części) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['gniazda']))
	{
		echo '<p> - Wymiana gniaza USB, audio i innych (100 zł) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['zasilanie']))
	{
		echo '<p> - Wymiana gniazda zasilania (100 zł) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['grafika']))
	{
		echo '<p> - Naprawa karty graficznej (od 100 zł) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['zgranieDanych']))
	{
		echo '<p> - Zgranie danych (od 60 zł) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['naprawaPlyty']))
	{
		echo '<p> - Naprawa płyty głównej (od 200 zł + części) </p>';
		$suma = $suma+200; 
	}
	
	if (isset($_POST['wymianaBGA']))
	{
		echo '<p> - Wymiana układu BGA (300 zł) </p>';
		$suma = $suma+300; 
	}
	
	if (isset($_POST['naprawaBGA']))
	{
		echo '<p> - Naprawa układu BGA (150 zł) </p>';
		$suma = $suma+150; 
	}
	
	if (isset($_POST['czyszczeniePoZalaniu']))
	{
		echo '<p> - Czyszczenie laptopa po zalaniu (150 zł) </p>';
		$suma = $suma+150; 
	}
	
	if (isset($_POST['wymianaKlawiatury']))
	{
		echo '<p> - Wymiana klawiatury (od 120 zł z klawiaturą ) </p>';
		$suma = $suma+120; 
	}
	
	if (isset($_POST['wymianaObudowy']))
	{
		echo '<p> - Wymiana obudowy (100 zł + obudowa) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['wymianaPlyty']))
	{
		echo '<p> - Wymiana płyty głównej (100 zł + części) </p>';
		$suma = $suma+100; 
	}
	
	if (isset($_POST['wymianaZawiasow']))
	{
		echo '<p> - Wymiana zawiasów (od 80 zł + części) </p>';
		$suma = $suma+80; 
	}
	
	if (isset($_POST['wymianaWentylatora']))
	{
		echo '<p> - Wymiana wentylatora (od 60 zł + części) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['naprawaSystemu']))
	{
		echo '<p> - Naprawa systemu (80 zł) </p>';
		$suma = $suma+80; 
	}
	
	if (isset($_POST['wgranieSterownikow']))
	{
		echo '<p> - Wgranie sterowników (60 zł) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['formatowanieDysku']))
	{
		echo '<p> - Formatowanie dysku (40 zł) </p>';
		$suma = $suma+40; 
	}
	
	if (isset($_POST['wymianaTasmy']))
	{
		echo '<p> - Wymiana taśmy matrycy (60 zł) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['konfig3G']))
	{
		echo '<p> - Konfiguracja modemu 3G w laptopie (60 zł) </p>';
		$suma = $suma+60; 
	}
	
	if (isset($_POST['avast']))
	{
		echo '<p> - Wgranie programu antywirusowego (30 zł) </p>';
		$suma = $suma+30; 
	}
	
	if (isset($_POST['wymianaWi-Fi']))
	{
		echo '<p> - Wymiana karty Wi-Fi  (30 zł) </p>';
		$suma = $suma+30; 
	}
	
	if (isset($_POST['SSD']))
	{
		echo '<p> - Wymiana zwykłego dysku na dysk SSD (koszt dysku SSD + instalacja systemu) </p>';
		$suma = $suma+0; 
	}
	
	if (isset($_POST['diag']))
	{
		if ($suma == 0)
		{
			echo '<p> - Diagnostyka (50 zł) </p>';
			$suma = $suma+50; 
		}
		else
		{
			echo '<p> - Diagnostyka (0 zł. Nie liczona do kosztów naprawy) </p>';
			$suma = $suma+0; 
		}
	}
	
	
	
	// musi być na końcu żeby działało!!!
	if (isset($_POST['diagApple']))
	{
		if ($suma == 0)
		{
			echo '<p> - Diagnostyka (200 zł) </p>';
			$suma = $suma+200; 
		}
		else
		{
			echo '<p> - Diagnostyka (0 zł. Nie liczona do kosztów naprawy) </p>';
			$suma = $suma+0; 
		}
	}

	
	// dodaj "od" do ceny
	if (isset($_POST['haslo']) || isset($_POST['wMatrycy']) || isset($_POST['grafika']) || isset($_POST['zgranieDanych']) || isset($_POST['naprawaPlyty']) || isset($_POST['wymianaKlawiatury']) || (isset($_POST['wymianaZawiasow'])) || (isset($_POST['wymianaWentylatora'])))
	{
		$od = "od";
	}
	
	// dodaj "+ części" do ceny
	if (isset($_POST['wMatrycy']) || isset($_POST['naprawaPlyty']) || (isset($_POST['wymianaKlawiatury'])) || (isset($_POST['wymianaObudowy'])) || (isset($_POST['wymianaPlyty'])) || (isset($_POST['wymianaZawiasow'])) || (isset($_POST['wymianaWentylatora'])))
	{
		$czesci = "+ części";
	}
	
	// tylko expres
	if ($suma == 100 && isset($_POST['szybko']) && !isset($_POST['SSD']))
	{
		echo "<b>Naszym zdaniem nie warto płacić tylko za usługę expresową :)</b>";
		echo '<a href="index.php" id="apowrot"><div id="powrot"> Powrót </div></a>';
		exit();
	}
	
	// dysk SSD
	if (isset($_POST['SSD']))
	{
		$dyskSSD = "+ koszt dysku SSD + instalacja systemu";
	}
	
	// pusty koszyk
	if ($suma == 0 && !isset($_POST['SSD']))
	{
		echo "Twoje zamówienie jest puste, dlatego <b>SUMA</b> wynosi <b>0 złotych.</b>";
		echo '<a href="index.php" id="apowrot"><div id="powrot"> Powrót </div></a>';
		exit();
	}
	
	echo "<b>SUMA:</b> $od $suma złotych $czesci $dyskSSD";
	
	echo '<a href="index.php" id="apowrot"><div id="powrot"> Powrót </div></a>';
	
	echo '<a href="https://omegaserwis.com.pl" id="apowrot" style="position: fixed; left: 10px; top: 10px;"><div id="powrot" style=" margin-left: 0px; margin-top: 0px; width: 130px;"> Strona główna </div></a>';
	
	
	
	
?>

</div>

<script>window.$czater = {tok: "7d14bdcfbc567d40b2ed797ef5ebb9012e5753e8", domain: "https://www.czater.pl/", login: undefined, email: undefined};</script><script src="https://www.czater.pl/assets/modules/chat/js/chat.js" async></script>
</body>
</html>