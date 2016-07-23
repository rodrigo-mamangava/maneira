$( document ).ready( function() {
	var page = window.location.pathname;
	if(page.indexOf('index') != -1){
		$("#content-image").css("background-image",'url("wp-content/themes/maneira-advogados/image/background-home.jpg")')
	}else if(page.indexOf('atuacao') != -1){
		$("#content-image").css("background-image",'url("/wp-ma/wp-content/themes/maneira-advogados/image/background-atuacao.jpg")')
	}else if(page.indexOf('equipe') != -1){
		$("#content-image").css("background-image",'url("/wp-ma/wp-content/themes/maneira-advogados/image/background-equipe.png")')
	}else if(page.indexOf('noticias') != -1){
		$("#content-image").css("background-image",'url("/wp-ma/wp-content/themes/maneira-advogados/image/background-noticias.png")')
	}else if(page.indexOf('publicacoes') != -1){
		$("#content-image").css("background-image",'url("/wp-ma/wp-content/themes/maneira-advogados/image/background-publicacoes.png")')
	}else if(page.indexOf('search-page') != -1){
		$("#content-image").css("background-image",'url("image/background-busca.jpg")')
	}

	if(!$("#index-page").length){
		$("#content-image").css("height",410);
	}else{
		$("#content-image").css("height",860);
	}

	$('#myModalEquipe ul.nav-tabs li').on('click', function(){
		if($(this).hasClass('active'))
			return;
		$('#myModalEquipe ul.nav-tabs li').removeClass('active');
		$(this).addClass('active');

		changeContent($(this).attr('content'));

	})

	function changeContent(content){
		
		switch(content){
			case 'biografia':
				$('.modal-tabs-content.formacao').hide()
				$('.modal-tabs-content.premios').hide()
		        $('.modal-tabs-content.biografia').hide()
		        $('.modal-tabs-content.idiomas').hide()
		        $('.modal-tabs-content.biografia').show()
		        break;
		    case 'formacao':
		    	$('.modal-tabs-content.premios').hide()
		        $('.modal-tabs-content.biografia').hide()
		        $('.modal-tabs-content.formacao').hide()
		        $('.modal-tabs-content.idiomas').hide()
		        $('.modal-tabs-content.formacao').show()
		        break;
		    case 'premios':
		    	$('.modal-tabs-content.biografia').hide()
		        $('.modal-tabs-content.formacao').hide()
		        $('.modal-tabs-content.premios').hide()
		        $('.modal-tabs-content.idiomas').hide()
		        $('.modal-tabs-content.premios').show()
		        break;
		    case 'idiomas':
		    	$('.modal-tabs-content.biografia').hide()
		        $('.modal-tabs-content.formacao').hide()
		        $('.modal-tabs-content.premios').hide()
		        $('.modal-tabs-content.idiomas').hide()
		        $('.modal-tabs-content.idiomas').show()
		        break;			
		}
	}

});



