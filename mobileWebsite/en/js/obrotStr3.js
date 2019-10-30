// Skrypt na resopnsywność strony.
		function obrot() {
			console.log('Zmniejszanie menu działa');
			if (screen.width > screen.height)
			{
				document.getElementById('menu').style.height = "130px";
				document.getElementById('logo-menu').style.width = "100px";
				document.getElementById('logo-menu').style.height = "100px";
				document.getElementById('logo-menu').style.marginTop = "15px";
				document.getElementById('str-gl').style.padding = "0px";
				document.getElementById('str-usl').style.padding = "0px";
				document.getElementById('str-lok').style.padding = "0px";
				document.getElementById('str-stat').style.padding = "0px";
				document.getElementById('pojemnik').style.marginTop = "150px";
				document.getElementById('str-gl').style.fontSize = "22px";
				document.getElementById('str-usl').style.fontSize = "22px";
				document.getElementById('str-lok').style.fontSize = "22px";
				document.getElementById('str-stat').style.fontSize = "22px";
				document.getElementById('str-gl').style.marginTop = "13px";
				document.getElementById('str-usl').style.marginTop = "13px";
				
				var fontPudelko = document.querySelectorAll(".pudełko");
				var fontOpis = document.querySelectorAll(".opis");
				var Zdjecie = document.querySelectorAll(".zdj");
				var i;
				for (i = 0; i < fontPudelko.length; i++)
				{
					fontPudelko[i].style.fontSize = "18px";
					fontOpis[i].style.fontSize = "22px";
					Zdjecie[i].style.width = "50%";
				}
				
			}
			else
			{
				document.getElementById('menu').style.height = "300px";
				document.getElementById('logo-menu').style.width = "250px";
				document.getElementById('logo-menu').style.height = "250px";
				document.getElementById('logo-menu').style.marginTop = "25px";
				document.getElementById('str-gl').style.padding = "40px";
				document.getElementById('str-usl').style.padding = "40px";
				document.getElementById('str-lok').style.padding = "40px";
				document.getElementById('str-stat').style.padding = "40px";
				document.getElementById('pojemnik').style.marginTop = "460px";
				document.getElementById('str-gl').style.fontSize = "35px";
				document.getElementById('str-usl').style.fontSize = "35px";
				document.getElementById('str-lok').style.fontSize = "35px";
				document.getElementById('str-stat').style.fontSize = "35px";
				document.getElementById('str-gl').style.marginTop = "0px";
				document.getElementById('str-usl').style.marginTop = "0px";
				
				var fontPudelko = document.querySelectorAll(".pudełko");
				var fontOpis = document.querySelectorAll(".opis");
				var Zdjecie = document.querySelectorAll(".zdj");
				var i;
				for (i = 0; i < fontPudelko.length; i++)
				{
					fontPudelko[i].style.fontSize = "30px";
					fontOpis[i].style.fontSize = "40px";
					Zdjecie[i].style.width = "70%";
				}
				
			}
		}
		
		
		window.onload = function () {
			obrot();
			
		}
		window.onresize = function (event) {
			obrot();
			
		}