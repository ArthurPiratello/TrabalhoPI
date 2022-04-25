function validar() {


    if(document.form.nome.value == ""){
       alert('Preencha o campo NOME.')
       return false;
    }

    if(document.form.email.value == "" || 
    document.form.email.value.indexOf('@')== -1){
        alert('Preencha o campo E-MAIL corretamente.')
        return false;
    }

    if(document.form.email.value.indexOf('.')== -1){
        alert('Está faltando o ".".')
        return false;
    }

    if(document.form.mensagem.value == ""){
        alert('Preencha o campo MENSAGEM.')
        return false;
    }

    if(document.form.mensagem.value.length <10){
        alert('Você precisa digitar pelo menos 20 caracteres.')
        return false;
    } 
    

}