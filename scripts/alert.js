	var hole = document.getElementById("hole");
	var mesaj = document.getElementById("mesaj");
	var blocheaza = document.getElementById("blocheaza");
	var numar = document.getElementById("numar");
	var btn = document.getElementById("btn");
function partea1(){
	
	hole.style.display="block";
	hole.style.transition = "all 2s";
	mesaj.style.display="block";
	blocheaza.style.display="block";
	numar.blur();
	setTimeout(schimba, 6000);
}
function partea2() {
	numar.style.zIndex="2";
	hole.style.top="630px";
	hole.style.left="45vw";
	hole.style.width="9vw";
	hole.style.height="9vw";
	btn.style.zIndex="5";
	mesaj.innerHTML = "Apasa butonul.";
	mesaj.style.width = "10vw";
	mesaj.style.right = "1vw";
}
function cauta (){
	if(numar.value!="")
	{
		clearInterval(mereu);
		setTimeout(partea2, 50);
	}
}
function schimba() {
	mesaj.innerHTML = "Alege un număr de la 1 la 100.";
	mesaj.style.width = "20vw";
	mesaj.style.right = "5vw";
	mesaj.style.bottom = "7vh";
	numar.style.zIndex="4";
	numar.focus();
}
partea1();

var mereu = setInterval(cauta, 1000);


