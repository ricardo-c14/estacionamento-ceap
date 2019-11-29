function editarLinha(){
	var button = document.getElementById("editar_dados");
	var table = document.getElementById("tbody0");

	for(var i = 0, row; row = table.rows[i]; i++){
		for(var j = 1, col; col = row.cells[j]; j++){
			row.cells[j].contentEditable = true;
		}
	}

	var tbody = document.getElementById("tbody0");

	if(document.getElementById("confirmar_edicao")){

	} else {
		var newButton = document.createElement('button');
		newButton.className = "btn btn-default";
		newButton.id = "confirmar_edicao";
		newButton.innerHTML = "Confirmar edição";
		newButton.onclick = apagarConfirmarEdicao();
		newButton.setAttribute('type', 'submit');
		tbody.appendChild(newButton);
	}
}

function apagarConfirmarEdicao(){
	if (document.getElementById("confirmar_edicao")){
		var element = document.getElementById("editar_dados");
		element.nextElementSibling.remove();
	}
}