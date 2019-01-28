//var resposta = confirm("Deseja realmente excluir esse registro?");

/*
console.log(resposta);
*/

const a = 10;
const b = 33;

function somar(a, b){

	return parseInt(a) + parseInt(b);
}

//console.log(somar(2, 5));

//document"neste documento" 
//qnd coloca o "." tem acesso a métodos e propriedades desse document
//propriedades são informações que eu posso mudar
//métodos são ações que eu posso executar
//querySelector é um método que permite selecionar alguém do document, neste caso está selecionando
//o ID="calcular" do input
//addEventListener "criar uma escuta de evento". Neste caso evento "click".
//Qnd clicar executa uma função
document.querySelector("#calcular").addEventListener("click", function(){

	let	valorA = document.querySelector("#valorA").value;
	let	valorB = document.querySelector("#valorB").value;
	if(valorA.length > 0 && valorB.length > 0) {
		//alert(parseInt(valorA) + parseInt(valorB));
		alert(somar(valorA, valorB));
	} else {

		alert("Digite os valores para o cálculo!");
	}
});