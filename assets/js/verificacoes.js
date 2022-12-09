function checaSenha(){
    let senha = document.getElementById("senha").value;
    let senha2 = document.getElementById("senha2").value;
    let mensagem = document.getElementById("mensagem");

    if(senha == senha2){
        mensagem.textContent = "Senhas Iguais";
        mensagem.style.backgroundColor = "#3ae374";
    }else{
        mensagem.textContent = "Senhas Diferentes";
        mensagem.style.backgroundColor = "#ff4d4d";
    }
}