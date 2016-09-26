$( document ).ready( function() {
	showContent();

	if(window.location.hash.length > 0){
		var currAuthor = window.location.hash.split('#')[1];
		var authors = $('.publicacoes-author');
		var autorNaoEncontrado = 0;
		for(var i = 0; i < authors.length; i++){
			if(authors.eq(i).text() != currAuthor){
				authors.eq(i).parents('.content-text-publicacoes-item').hide(400);
				autorNaoEncontrado++;
			}
		}
		if(authors.length == autorNaoEncontrado){
			$('.no-publish').show(400);
		}else{
			$('.no-publish').hide(400);
		}
	}

	$('.searchbox span#search-publicacao').on('click touchstart',function(){
		// var textToSeach = $('.searchbox input').val()
		// var membrosDaEquipe = $('.content-equipe .equipe-membro-info');
		// var membrosNaoEncontrados = 0;
		// for(var i = 0; i < membrosDaEquipe.length; i++){
		// 	var membro = membrosDaEquipe.eq(i);
		// 	if(membro.children('span.equipe-membro-nome').text().toLowerCase().indexOf(textToSeach.toLowerCase()) == -1){
		// 		membrosNaoEncontrados += 1;
		// 		membro.parents('.content-equipe').hide(400);
		// 	}else{
		// 		if(membro.parents('.content-equipe').css('display') == 'none'){
		// 			$('.no-member').hide(400);
		// 			membro.parents('.content-equipe').show(400);
		// 		}
		// 	}
		// }

		// if(membrosDaEquipe.length == membrosNaoEncontrados){
		// 	$('.no-member').show(400);
		// }
		console.log('Funciona');
		
	})

	$('#publicacoes-selection span').on('click',function(){
		if($(this).hasClass('selected'))
			return;
		$('#publicacoes-selection span').removeClass('selected');
		$(this).addClass('selected');
		showContent($(this).attr('page').trim());
		// carregaPublicacoesContent($(this).attr('page').trim());
	})

	function carregaPublicacoesContent(content){
		if(content)
			$('.content-text-publicacoes').load('archive-publicacoes-'+content+'.php');
		else
			$('.content-text-publicacoes').load('archive-publicacoes-artigos.php');
	}

	function showContent(content){
		switch(content){
			case 'artigos':
				$('.content-text-publicacoes .palestras').hide()
		        $('.content-text-publicacoes .artigos').show()
		        break;
		    case 'palestras':
		    	$('.content-text-publicacoes .artigos').hide()
		        $('.content-text-publicacoes .palestras').show()
		        break;
		    default:
		        $('.content-text-publicacoes .artigos').show()
		}
	}
});