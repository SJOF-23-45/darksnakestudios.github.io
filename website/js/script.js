function abrir(){
	document.getElementById('popup_Login').style.display = 'flex';
}
function abrirCadastro(){
	document.getElementById('popup_Cadastro').style.display = 'flex';
}
function fechar(){
	document.getElementById('popup_Login').style.display = 'none';
	document.getElementById('popup_Cadastro').style.display = 'none';
}
function msg(){
	alert ("Essa tela ainda está em desenvolvimento");
}
function questionmark(){
	document.getElementById('question').text = "Question Mark";
}
function questionmarkleave(){
	document.getElementById('question').text = "?";
}