var napis;
var znaki = {'a':'z','b':'x','c':'c','d':'v','e':'b','f':'n','g':'m','h':'q','i':'w','j':'e','k':'r','l':'t','m':'y','n':'u','o':'i','p':'o','q':'p','r':'a','s':'s','t':'d','u':'f','v':'g','w':'h','x':'j','y':'k','z':'l'};
var zaszyfrowane;

function szyfrowanie()
{
	napis = document.getElementById('input').value;
	
	zaszyfrowane = napis.replace(/[abcdefghijklmnopqrstuvwxyz]/g, m => znaki[m]);

	document.getElementById('output').value = zaszyfrowane;
}