$( document ).ready( function() {
	showContent();

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