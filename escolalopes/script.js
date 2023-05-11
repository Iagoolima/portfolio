function prof(){
    let senha = prompt('*Acesso restrito para professores*\n Digite a senha de acesso:')
    if(senha == '12345'){
        alert('Senha correta!')
    }else{
        alert('Senha incorreta !\n\nTente novamente')
    }
}

function pegarFolha(){
    let folha = document.getElementById("folha")
    let textoFolha = document.getElementById("textFolha")
    folha.style.display="block"
    textoFolha.style.display="none"
}


function verificar(){
        let nome = document.querySelector("input[name='nome']").value
        let idade = document.querySelector("select[name='idade']").value
        let sala = document.querySelector("select[name='sala']").value
        let folha = document.querySelector("textarea[name='folha']").value
        let status = 0 

        

        if(nome ==""){
            alert("Eii, acho que você esqueceu...\n\nPrecisa preencher seu nome ^_^ ")
            status=1 
        }

        if(idade ==""){
            alert("Eii, acho que você esqueceu...\n\nPrecisa me dizer qual a sua idade ^_^ ")
            status=1 
        }

        if(sala ==""){
            alert("Eii, acho que você esqueceu...\n\nPrecisa me dizer qual a sala que você estuda  ^_^ ")
            status=1 
        }

        if(folha ==""){
            alert("Eii, acho que você esqueceu...\n\nPrecisa fazer sua redação ^_^")
            status=1
        }
    
        if(status == 0){
            alert("NOSSA ! COMO SUAS FÉRIAS FORAM DIVERTIDAS!\n\nMAS FOI BOM TE CONHECER... tchau tchau (っ◔◡◔)っ ❤ ")
            return true
        }

        else{
            return false;
            
        }
    }
    
    












