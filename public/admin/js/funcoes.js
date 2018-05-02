function setActive(ident){
	var i=document.getElementById(ident);
	i.setAttribute('class','active');
}

function showSucess(t){
	var msg='';
	if(t=='inserir'){
		msg='Dados Gravados!';
	}else{
		msg='Dados Apagados!';
	}
	document.getElementById('sucesso').style.display="block";
	document.getElementById('sucesso').innerHTML+="<strong>"+msg+"</strong>";
	$('#sucesso').delay(3000).fadeOut('slow');
}

/****************************Sanfona*************************************/
