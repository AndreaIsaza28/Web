const formulario = document.getElementById('form');
const usuario = document.getElementById('clave');
const clave = document.querySelectorAll('#formulario input');

form.addEventListener("submit", e=>){
	e.preventDefaul()
	let warnings = "";
	let entrar = falso;
	parrafo.innerHTML = "";
	if (nombre.values.length > 10) {
		warnings += 'El usuario no es valido <br>';
		entrar	= true;
	}
	if (clave.}.values.length > 10) {
		warnings += 'la clave no es valido <br>';
		entrar	= true;
	}
	if (entrar) {
		parrafo.innerHTML = warnings;
	}else{
		parrafo.innerHTML = "enviado";
	}
}