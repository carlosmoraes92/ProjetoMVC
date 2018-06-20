//Script Mascara (Telefone)
/* Máscaras ER */
function maskPhone(val1,val2){
    v_obj=val1
    v_fun=val2
    setTimeout("calMaskPhone()",1)
}
function calMaskPhone(){
    v_obj.value=v_fun(v_obj.value)
}
function phone(value){
    value=value.replace(/\D/g,"");             //Remove tudo o que não é dígito
    value=value.replace(/^(\d{2})(\d)/g,"($1)$2"); //Coloca parênteses em volta dos dois primeiros dígitos
    value=value.replace(/(\d)(\d{3})$/,"-$1$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return value;
}
function id(element){
    return document.getElementById(element);
}
window.onload = function(){
    id('location_number').onkeypress = function(){
        maskPhone( this, phone );
    }
}
//Fim do Script Mascara (Telefone)