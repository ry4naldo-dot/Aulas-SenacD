document.title = 'Aula Js';

// document.body.style.backgroundColor = "blue";

document.getElementById('idTeste').innerHTML = "<b>Teste 1 </b>";
document.getElementById('idTeste2').innerText = "<b>Teste 2 </b>";

setTimeout(() => {
    document.getElementById('idTeste3').innerHTML = "<b>Teste 3 </b>";

}, 5000);

  document.getElementsByTagName('h2')[2].innerText = 'Hello World!';

//hasatribute

// let oi = document.getElementById('idTeste').hasAttribute('class');

// console.log(oi);

//getatribute

//setAttribute

let getAtribute = document.getElementById('idTeste');

let oi = getAtribute.getAttribute('class');

if(oi == null){
    getAtribute.setAttribute('style', 'background-color: blue');
}


function mudarTexto(){
   
    var elemento = document.getElementById('mensagem');

    // if(elemento.innerText === "Texto não alterado brother!"){
    //     elemento.innerText = "Alterado!"
    // }else{
    //     elemento.innerText = "Texto não alterado brother!"
    // }

    elemento.innerText = (elemento.innerText === "Texto não alterado brother!") ?
     "Alterado" : "Texto não alterado brother!";


}

let botao = document.getElementById('botao');
let texto = document.getElementById('texto');

botao.addEventListener("click", () => {
    texto.classList.toggle("hidden");
});



let campo = document.getElementById('campo');
let saida = document.getElementById('saida');

campo.addEventListener("input", (oi) => {
    saida.innerText = "Você digitou: " + oi.target.value; 
});





