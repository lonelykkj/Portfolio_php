
const inpNome = document.getElementById("nome");
const inpSenha = document.getElementById("senha");
const inpSenhaConf = document.getElementById("senhaconf");

var errorContainer = document.getElementById("error-container");
var errorBox = document.getElementById("BoxError");


    function verificar(){
        console.log(inpNome.value);
        console.log(inpSenha.value);
        console.log(inpSenhaConf.value);
        if (inpNome === '' || inpSenha === '' || inpSenhaConf === ''){  
        errorBox.style.display = 'block';
        errorContainer.style.display = 'block';
        errorContainer.innerHTML = "Preencha todos os campos"; // Limpar erros anteriores
        }
        document.getElementById('fecharBox').addEventListener('click', function (){
            errorBox.style.display = 'none';
            errorContainer.style.display = 'none';
        });
}