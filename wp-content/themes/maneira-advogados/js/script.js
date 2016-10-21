$( document ).ready( function() {
	var page = window.location.pathname;
	if(page.indexOf('index') != -1){
		$("#content-image").css("background-image",'url("wp-content/themes/maneira-advogados/image/background-home.jpg")')
	}else if(page.indexOf('atuacao') != -1){
		$("#content-image").css("background-image",'url("/wp-content/themes/maneira-advogados/image/background-atuacao.jpg")')
	}else if(page.indexOf('equipe') != -1){
		$("#content-image").css("background-image",'url("/wp-content/uploads/2016/07/background-equipe-b.jpg")')
	}else if(page.indexOf('noticias') != -1){
		$("#content-image").css("background-image",'url("/wp-content/themes/maneira-advogados/image/background-noticias.png")')
	}else if(page.indexOf('publicacoes') != -1){
		$("#content-image").css("background-image",'url("/wp-content/themes/maneira-advogados/image/background-publicacoes.png")')
	}else if(page.indexOf('search-page') != -1){
		$("#content-image").css("background-image",'url("image/background-busca.jpg")')
	}

	if(!$("#index-page").length){
		$("#content-image").css("height",500);
	}else{
		$("#content-image").css("height",860);
	}


	//EVENTO DE CLICK NAS ABAS DA TABBAR DO MODAL EQUIPE - INICIO
	$('.myModalEquipe ul.nav-tabs li').on('click', function(){
		if($(this).hasClass('active'))
			return;
		$('.myModalEquipe ul.nav-tabs li').removeClass('active');
		$(this).addClass('active');

		changeContent($(this).attr('content'));

	})
	//EVENTO DE CLICK NAS ABAS DA TABBAR DO MODAL EQUIPE - FIM

	//COMPORTAMENTO DO MODAL DE EQUIPE - INICIO
	$(window).on('shown.bs.modal', function() {
		$('.myModalEquipe .equipe-membro ul li[content="biografia"]').addClass('active');
		$('.myModalEquipe .equipe-membro ul li').not('[content="biografia"]').removeClass('active');
		$('.equipe-membro-mobile-wrapper ul li[content="biografia"]').addClass('active');
		$('.equipe-membro-mobile-wrapper ul li').not('[content="biografia"]').removeClass('active');
	});

	$(window).on('hidden.bs.modal', function() {
		$('.modal-tabs-content.formacao').hide()
		// $('.modal-tabs-content.premios').hide()
        $('.modal-tabs-content.idiomas').hide()
        $('.modal-tabs-content.biografia').show()
	});
	//COMPORTAMENTO DO MODAL DE EQUIPE - FIM

	$('.searchbox span#search-equipe').on('click touchstart',function(){
		var textToSeach = $('.searchbox input').val()
		var membrosDaEquipe = $('.content-equipe .equipe-membro-info');
		var membrosNaoEncontrados = 0;
		for(var i = 0; i < membrosDaEquipe.length; i++){
			var membro = membrosDaEquipe.eq(i);
			if(membro.children('span.equipe-membro-nome').text().toLowerCase().indexOf(textToSeach.toLowerCase()) == -1){
				membrosNaoEncontrados += 1;
				membro.parents('.content-equipe').hide(400);
			}else{
				if(membro.parents('.content-equipe').css('display') == 'none'){
					$('.no-member').hide(400);
					membro.parents('.content-equipe').show(400);
				}
			}
		}

		if(membrosDaEquipe.length == membrosNaoEncontrados){
			$('.no-member').show(400);
		}

	})

	$('.searchbox input').on('change', function(){
		if($(this).val() == ''){
			var membros = $('.content-equipe');
			for(var i = 0; i < membros.length; i++){
				if(membros.eq(i).css('display') == 'none'){
					membros.eq(i).show(400);
				}
			}
			$('.no-member').hide(400);
		}
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
