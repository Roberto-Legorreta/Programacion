function botonIngresar(){

	var encabezado = document.getElementById('encabezado');

	var cubrePantallaIngresar = document.createElement('div');
	cubrePantallaIngresar.setAttribute('id', 'cubrePantallaIngresar');
	document.body.insertBefore(cubrePantallaIngresar, encabezado); 

	var cajaCentradaIngresar = document.createElement('div');
	cajaCentradaIngresar.setAttribute('id', 'cajaCentradaIngresar');
	cajaCentradaIngresar.setAttribute('class', 'quincePixeles');
	document.body.insertBefore(cajaCentradaIngresar, encabezado); 

	var titulo = document.createElement('p');
	var textoTitulo =  document.createTextNode('INICIA SESIÓN');
	titulo.setAttribute('id', 'tituloIngresar');
	titulo.setAttribute('class', 'veinticincoPixeles');
	titulo.appendChild(textoTitulo);
	cajaCentradaIngresar.appendChild(titulo); 

	var formulario = document.createElement('form');
	formulario.setAttribute('id', 'formularioIngresar');
	formulario.setAttribute('class', 'quincePixeles');
	cajaCentradaIngresar.appendChild(formulario); 

	var inputEmail = document.createElement('input');
	inputEmail.setAttribute('class', 'inputFormularioIngresar quincePixeles');
	inputEmail.setAttribute('required', '');
	inputEmail.setAttribute('placeholder', 'Email');
	formulario.appendChild(inputEmail); 

	var inputContraseña = document.createElement('input');
	inputContraseña.setAttribute('class', 'inputFormularioIngresar inputDerechoFormularioIngresar quincePixeles');
	inputContraseña.setAttribute('type', 'password');	
	inputContraseña.setAttribute('placeholder', 'Contraseña');
	formulario.appendChild(inputContraseña);

	var ingresar = document.createElement('button');
 	ingresar.setAttribute('id', 'formularioBotonIngresar');
	ingresar.setAttribute('class', 'quincePixeles');
	ingresar.setAttribute('type', 'submit');
	var textoRegistrar = document.createTextNode('Iniciar sesión');
	ingresar.appendChild(textoRegistrar);
	formulario.appendChild(ingresar);

	cargado();
}

function salirBotonIngresar(){
	document.body.removeChild(cubrePantallaIngresar);
	document.body.removeChild(cajaCentradaIngresar);
}