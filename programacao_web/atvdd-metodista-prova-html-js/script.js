//Função para mudar conteúdo da section TESTE
function avancar (atual,proxima){
	document.getElementById(atual).style.display = "none";
	document.getElementById(proxima).style.display = "block";
}

			
//Validando as respostas do usuário
function checarRespostas(){
	resp1=form1.questao1[3].checked;
	resp2=form1.questao2[0].checked;
	resp3=form1.questao3[2].checked;
	resp4=form1.questao4[3].checked;
	resp5=form1.questao5[1].checked;
	resp6=form1.questao6[1].checked;
	resp7=form1.questao7[3].checked;
	resp8=form1.questao8[0].checked;
	resp9=form1.questao9[1].checked;	
	resp10=form1.questao10[0].checked;

	acertos=0;
	erros=0;
	numErro=' -';
    
	
	if (resp1== true){
		acertos++;
	
	}
				
	else{
		erros++;
		numErro+=" Questão 1 -";
	}
				
	if (resp2 == true){
		acertos++;
	}
	
	else{
		erros++;
		numErro+=" Questão 2 -";
	}
	
	if (resp3 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 3 -";
	}
	
	if (resp4 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 4 -";
	}

	if (resp5 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 5 -";
	}

	if (resp6 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 6 -";
		}

	if (resp7 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+="Questão 7 -";
	}

	if (resp8 == true){
		acertos++;
					
	}
	else{
		erros++;
		numErro+=" Questão 8 -";
	}

	if (resp9 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 9 -";
	}

	if (resp10 == true){
		acertos++;
	}
	else{
		erros++;
		numErro+=" Questão 10 -";
	}
	
	alert("Acertos: "+acertos+"\nErros: "+erros+"\nQuestões que você errou:"+numErro);
	printRespostas(acertos);
				
}

function printRespostas(acertos){

	if (acertos==10){
		alert("Parabéns você acertou todas as questões!! Sua nota foi: 10");
	}
	else{
		alert("Sua nota foi: " + acertos)
	}
}

// Valindando os campos
function validaVazio() {

	if((form1.questao1[0].checked == false)&&(form1.questao1[1].checked == false)&&(form1.questao1[2].checked == false)&&(form1.questao1[3].checked == false)){
		alert('Escolha uma das opções da Questão 1');
		form1.questao1[0].focus();
		return false;
	}
				
	else if((form1.questao2[0].checked == false)&&(form1.questao2[1].checked == false)&&(form1.questao2[2].checked == false)&&(form1.questao2[3].checked == false)){
		alert('Escolha uma das opções da Questão 2');
		form1.questao2[0].focus();
		return false;
	}

	else if((form1.questao3[0].checked == false)&&(form1.questao3[1].checked == false)&&(form1.questao3[2].checked == false)&&(form1.questao3[3].checked == false)){
		alert('Escolha uma das opções da Questão 3');
		form1.questao3[0].focus();
		return false;
	}

	else if((form1.questao4[0].checked == false)&&(form1.questao4[1].checked == false)&&(form1.questao4[2].checked == false)&&(form1.questao4[3].checked == false)){
		alert('Escolha uma das opções da Questão 4');
		form1.questao4[0].focus();
		return false;
	}

	else if((form1.questao5[0].checked == false)&&(form1.questao5[1].checked == false)&&(form1.questao5[2].checked == false)&&(form1.questao5[3].checked == false)){
		alert('Escolha uma das opções da Questão 5');
		form1.questao5[0].focus();
		return false;
	}

	else if((form1.questao6[0].checked == false)&&(form1.questao6[1].checked == false)&&(form1.questao6[2].checked == false)&&(form1.questao6[3].checked == false)){
		alert('Escolha uma das opções da Questão 6');
		form1.questao6[0].focus();
		return false;
	}
				
	else if((form1.questao7[0].checked == false)&&(form1.questao7[1].checked == false)&&(form1.questao7[2].checked == false)&&(form1.questao7[3].checked == false)){
		alert('Escolha uma das opções da Questão 7');
		form1.questao7[0].focus();
		return false;
	}

	else if((form1.questao8[0].checked == false)&&(form1.questao8[1].checked == false)&&(form1.questao8[2].checked == false)&&(form1.questao8[3].checked == false)){
		alert('Escolha uma das opções da Questão 8');
		form1.questao8[0].focus();
		return false;
	}

	else if((form1.questao9[0].checked == false)&&(form1.questao9[1].checked == false)&&(form1.questao9[2].checked == false)&&(form1.questao9[3].checked == false)){
		alert('Escolha uma das opções da Questão 9');
		form1.questao9[0].focus();
		return false;
	}
				
	else if((form1.questao10[0].checked == false)&&(form1.questao10[1].checked == false)&&(form1.questao10[2].checked == false)&&(form1.questao10[3].checked == false)){
		alert('Escolha uma das opções da Questão 10');
		form1.questao10[0].focus();
		return false;
	}

	else {
		alert("Respostas enviadas com sucesso!!");

	}

				
		checarRespostas();

}
//Saudação ao usuário
function saudacao(){

	//Obtendo o nome do usuário	
	do {var nome=prompt("Olá,\nPor gentileza digite o seu nome:");
		}while(nome== "");	
			

	var data=new Date();
	var horas = data.getHours();


	if (horas<12){
		var saudacao='Bom dia ';
	}
	else if(horas<18){
		var saudacao="Boa tarde ";
	}

	else{
		var saudacao='Boa noite ';
	}

	nome="<strong>"+ nome.toUpperCase()+ "</strong>";
	msg=saudacao+nome;
	document.getElementById('saudar').innerHTML=msg+",";



		
}
		
	