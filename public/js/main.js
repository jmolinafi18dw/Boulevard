$(document).ready(function(){
	$('nav a').click(function(){
		let href = $(this).attr('href');
		$('html, body').animate(
			{scrollTop:($(href).offset().top)},500
		);
	});

	// esta variable guarda el estado de las tiendas (si están mostradas sólo 8 o todas)
	let tiendasMostradas = false;
	$('#mostrar-mas-tiendas').click(function(){
		// si están escondidas las muestra y viceversa
		$('.tienda:nth-child(n+9)').slideToggle(100);
		// cambia el estado de la variable al contrario al actual
		tiendasMostradas = !tiendasMostradas;
		// cambia el texto del botón dependiendo del estado de la variable
		$(this).text(tiendasMostradas?'ver menos':'ver todo');
	});

	// animaciones de scroll al clickar iconos de flechas
	$('#arrow_down').click(function(){
		$('html, body').animate(
			{scrollTop:$('#main').offset().top},500
		);
	});
	$('#arrow_up').click(function(){
		$('html, body').animate(
			{scrollTop:0},500
		);
	});

	let scrollStyling = ()=>{
		if($(this).scrollTop() > ($('#main').offset().top - 50)){
			// la flecha para subir aparecerá cuando se llegue al #main
			$('#arrow_up').fadeIn(500);
			// la barra de navegación cambia su estilo
			$('nav ul').css({
				'backgroundColor':'rgba(255,255,255,.9)',
				'boxShadow':'1px 1px 20px gray'
			});
		}else{
			// si no la flecha se esconde
			$('#arrow_up').fadeOut(500);
			// la barra de navegación recupera su estilo
			$('nav ul').css({
				'backgroundColor':'transparent',
				'boxShadow':'none'
			});
		}
	}

	// ejecutamos al cargar la página por si se está más abajo del #main
	scrollStyling();
	// lo ejecutamos también cuando se hace scroll
	$(window).scroll(function(){
		scrollStyling();
	});

	// mostrar modales y/o ocultarlos al hacer click en los iconos de contacto
	let modalShown = false;
	$('.contact-icon').click(function(){
		modalShown = !modalShown;
		$('.contact-data').slideUp()
		if(modalShown) $(this).siblings().slideUp();
		else $(this).siblings().slideDown();
	});

	let menuShown = false;
	$('#menuToggle').click(function(){
		$('nav ul').slideToggle();
		menuShown = !menuShown;
		if(menuShown) $(this).attr('src','img/cross.svg');
		else $(this).attr('src','img/menu.svg');
	});
});