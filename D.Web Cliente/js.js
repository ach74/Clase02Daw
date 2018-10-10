window.onload = function() {
  carregar();
};



function guardar() {

	var nombre = document.getElementById("nom").value;
	var color = document.getElementById("sel").value
	document.cookie = "nombre = " + nombre +";" + "color = "+ color;

//document.cookie="color_fons = red";
console.log(document.cookie);

};  

function carregar(){

	var nom_cookie, valor_cookie;
	var temp;
	var array_cookies = document.cookie.split(";");
	for(var i = 0; i < array_cookies.length; i++) {
		console.log (array_cookies[i])
		temp = array_cookies[i].split("=");
		nom_cookie = temp[0];
		valor_cookie = temp[1];
	}

	document.getElementById("nom").value = valor_cookie;

}

function borrar(){
	var nombre = document.getElementById("nom").value;
	document.cookie = nombre+"=; expires=01 Jan 2000 00:00:00 UTC";
	console.log(document.cookie);
}