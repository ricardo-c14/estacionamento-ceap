function editarLinha(){
	var checkBox = document.getElementById("checkboxed");
	var id = document.getElementById("id_proprietario").innerHTML;
	var rows = document.getElementById("table0");

	if (checkBox.checked == true){
		for(var i = 1; i <= 7; i++){
			rows.getElementsByTagName("tbody")[0].getElementsByTagName("tr")[id - 1].cells[i].contentEditable = true;
		}
	}
}
