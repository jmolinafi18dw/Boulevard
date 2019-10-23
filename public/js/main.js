    function validar() {
        //obtenemos el valor que se puso en los campos del formulario
        let valtexto = $('#nombre').val();
        let valimg = $('#imagen').val();

        //la condición
        if (valtexto.length == 0 || /^\s+$/.test(valtexto) || valtexto.length == null) {
            $('#nombre').css('borderColor','tomato');
            return false;
        }

        if (valimg.length == 0) {
            return false;
        }
        return true;
    }

    

$(document).ready(function(){
	
    
        optionSelected = document.getElementById('idiomaSelect').querySelectorAll('option[value="'+getLang()+'"]');
        optionSelected[0].setAttribute('selected',true);

	// moverse entre enlaces con animación
	$('nav a').click(function(){
		let href = $(this).attr('href');
		$('html, body').animate(
			{scrollTop:($(href).offset().top)},500
		);
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
		if(menuShown){
			$(this).attr('src','img/cross.svg');
			$(this).css('boxShadow','none');
		}else{
		 	$(this).attr('src','img/menu.svg');
			$(this).css('boxShadow','1px 1px 10px gray');
		}

	});
});
