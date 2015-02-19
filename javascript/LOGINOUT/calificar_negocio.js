function calificarNegocio(){

		var cajaHoverNegocio = document.createElement('div');
		cajaHoverNegocio.setAttribute('id', 'cajaHoverNegocio');

		var centraEstrellas = document.createElement('div');
		centraEstrellas.setAttribute('id', 'centraEstrellas');

		var estrellaUno = document.createElement('figure');
		var imagenUno = document.createElement('img');
		imagenUno.setAttribute('src', '../objetos/estrellas/estrella.png');
		estrellaUno.appendChild(imagenUno);

		var estrellaDos = document.createElement('figure');
		var imagenDos = document.createElement('img');
		imagenDos.setAttribute('src', '../objetos/estrellas/estrella.png');
		estrellaDos.appendChild(imagenDos);

		var estrellaTres = document.createElement('figure');
		var imagenTres = document.createElement('img');
		imagenTres.setAttribute('src', '../objetos/estrellas/estrella.png');
		estrellaTres.appendChild(imagenTres);

		var estrellaCuatro = document.createElement('figure');
		var imagenCuatro = document.createElement('img');
		imagenCuatro.setAttribute('src', '../objetos/estrellas/estrella.png');
		estrellaCuatro.appendChild(imagenCuatro);

		var estrellaCinco = document.createElement('figure');
		var imagenCinco = document.createElement('img');
		imagenCinco.setAttribute('src', '../objetos/estrellas/estrella.png');
		estrellaCinco.appendChild(imagenCinco);

		centraEstrellas.appendChild(estrellaUno);
		centraEstrellas.appendChild(estrellaDos);
		centraEstrellas.appendChild(estrellaTres);
		centraEstrellas.appendChild(estrellaCuatro);
		centraEstrellas.appendChild(estrellaCinco);

		var negocio = event.target;

		cajaHoverNegocio.appendChild(centraEstrellas);
		negocio.appendChild(cajaHoverNegocio);
}

function salirCalificarNegocio(){
	$('.negocio').empty();
}