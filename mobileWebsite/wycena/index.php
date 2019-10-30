<!DOCTYPE HTML>
<html>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110194645-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-110194645-3');
	</script>


	<meta charset="utf-8"/>
	<title> Omega - wycena usługi </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet">
	<script src="mobile-detect.js"></script>
</head>
<body onload="getOS();">

<div id="pojemnik">
	<h1 class="naglowek">Nasze usługi</h1>
	<form action="order.php" method="post">
		<p>	<label> <input name="szybko" id="c3" type="checkbox" /><label for="c3"><span></span></label>Usługa expresowa </label></p>
		
		<p>	<label> <input name="czyszczeniePoZalaniu" id="c13" type="checkbox" /><label for="c13"><span></span></label>Czyszczenie laptopa po zalaniu </label></p>
		
		<p>	<label> <input name="czyszczenie" id="c2" type="checkbox" /><label for="c2"><span></span></label>Czyszczenie układu chłodzenia (Laptop) </label></p>
		<p>	<label> <input name="czyszczeniePC" id="c2.1" type="checkbox" /><label for="c2.1"><span></span></label>Czyszczenie układu chłodzenia (PC)</label></p>
		
		<p>	<label> <input name="diag" id="c2.2" type="checkbox" /><label for="c2.2"><span></span></label>Diagnostyka (Nie liczona do kosztów naprawy)</label></p>
		<p>	<label> <input name="diagApple" id="c2.3" type="checkbox" /><label for="c2.3"><span></span></label>Diagnostyka Apple (Nie liczona do kosztów naprawy)</label></p>
		
		<p>	<label> <input name="formatowanieDysku" id="c21" type="checkbox" /><label for="c21"><span></span></label>Formatowanie dysku </label></p>
		
		<p> <label> <input name="installOs" id="c1" type="checkbox" /><label for="c1"><span></span></label>Instalacje systemu </label> </p>
		
		<p>	<label> <input name="konfig3G" id="c23" type="checkbox" /><label for="c23"><span></span></label>Konfiguracja modemu 3G w laptopie </label></p>
		
		<p>	<label> <input name="grafika" id="c8" type="checkbox" /><label for="c8"><span></span></label>Naprawa karty graficznej</label></p>
		
		<p>	<label> <input name="naprawaPlyty" id="c10" type="checkbox" /><label for="c10"><span></span></label>Naprawa płyty głównej</label></p>
		
		<p>	<label> <input name="naprawaSystemu" id="c19" type="checkbox" /><label for="c19"><span></span></label>Naprawa systemu </label></p>
		
		<p>	<label> <input name="naprawaBGA" id="c12" type="checkbox" /><label for="c12"><span></span></label>Naprawa układu BGA </label></p>
				
		<p>	<label> <input name="haslo" id="c4" type="checkbox" /><label for="c4"><span></span></label>Odzyskiwanie hasła</label></p>
		
		<p>	<label> <input name="avast" id="c24" type="checkbox" /><label for="c24"><span></span></label>Wgranie programu antywirusowego </label></p>
		
		<p>	<label> <input name="wgranieSterownikow" id="c20" type="checkbox" /><label for="c20"><span></span></label>Wgranie sterowników </label></p>
		
		<p>	<label> <input name="gniazda" id="c6" type="checkbox" /><label for="c6"><span></span></label>Wymiana gniaza USB, audio i innych</label></p>
		
		<p>	<label> <input name="zasilanie" id="c7" type="checkbox" /><label for="c7"><span></span></label>Wymiana gniazda zasilania</label></p>
		
		<p>	<label> <input name="wymianaWi-Fi" id="c25" type="checkbox" /><label for="c25"><span></span></label>Wymiana karty Wi-Fi </label></p>
		
		<p>	<label> <input name="wymianaKlawiatury" id="c14" type="checkbox" /><label for="c14"><span></span></label>Wymiana klawiatury </label></p>
		
		<p>	<label> <input name="wMatrycy" id="c5" type="checkbox" /><label for="c5"><span></span></label>Wymiana matrycy</label></p>
		
		<p>	<label> <input name="wymianaObudowy" id="c15" type="checkbox" /><label for="c15"><span></span></label>Wymiana obudowy </label></p>
		
		<p>	<label> <input name="wymianaPlyty" id="c16" type="checkbox" /><label for="c16"><span></span></label>Wymiana płyty głównej </label></p>
		
		<p>	<label> <input name="wymianaTasmy" id="c22" type="checkbox" /><label for="c22"><span></span></label>Wymiana taśmy matrycy </label></p>
		
		<p>	<label> <input name="wymianaBGA" id="c11" type="checkbox" /><label for="c11"><span></span></label>Wymiana układu BGA </label></p>
		
		<p>	<label> <input name="wymianaWentylatora" id="c18" type="checkbox" /><label for="c18"><span></span></label>Wymiana wentylatora </label></p>
		
		<p>	<label> <input name="wymianaZawiasow" id="c17" type="checkbox" /><label for="c17"><span></span></label>Wymiana zawiasów </label></p>
		
		<p>	<label> <input name="SSD" id="c17.1" type="checkbox" /><label for="c17.1"><span></span></label>Wymiana zwykłego dysku na dysk SSD </label></p>
		
		<p>	<label> <input name="zgranieDanych" id="c9" type="checkbox" /><label for="c9"><span></span></label>Zgranie danych</label></p>
		
		
		
		
		<input type="submit" value="Wyceń" />
		
		<a href="http://m.omegaserwis.com.pl" id="apowrot" ><div id="powrot"> Strona główna </div></a>
	</form>
	
	
</div>

<script>

	var detector = new MobileDetect(window.navigator.userAgent)

	function getOS() {
  var userAgent = window.navigator.userAgent,
      platform = window.navigator.platform,
      macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
      windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
      iosPlatforms = ['iPhone', 'iPad', 'iPod'],
      os = null;

  if (macosPlatforms.indexOf(platform) !== -1) {
    os = 'Mac OS';
  } else if (iosPlatforms.indexOf(platform) !== -1) {
    os = 'iOS';
  } else if (windowsPlatforms.indexOf(platform) !== -1) {
    os = 'Windows';
  } else if (/Android/.test(userAgent)) {
    os = 'Android';
  } else if (!os && /Linux/.test(platform)) {
    os = 'Linux';
  }

  return os;
}

 if (getOS() !== "Android")
{
if (getOS() !== "iOS")
{
location.replace("https://omegaserwis.com.pl/wycena");
// alert("To nie jest android. To jest: " + getOS());
console.log("Twój system to: " + getOS());
}
}
</script>

<script>window.$czater = {tok: "7d14bdcfbc567d40b2ed797ef5ebb9012e5753e8", domain: "https://www.czater.pl/", login: undefined, email: undefined};</script><script src="https://www.czater.pl/assets/modules/chat/js/chat.js" async></script>
</body>
</html>