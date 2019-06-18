function formatar(mascara, documento){
  //codigofonte.com.br/codigos/script-configuravel-para-fomatacao-de-cep-cpf-telefone-e-outros
	var i = documento.value.length;
	var saida = mascara.substring(0, 1);
	var texto = mascara.substring(i);

	if (texto.substring(0, 1) != saida){
		documento.value += texto.substring(0, 1);
	}
}
