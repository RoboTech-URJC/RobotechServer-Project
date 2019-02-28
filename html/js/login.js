$(document).ready(function(){
  $('.signup-btn').click(function(){
    $('.register-form').show('slow');
    $('.secure-login').hide('slow');
    $('body').removeClass().addClass('signup-slide');
  });
  //default dispaly
   $('.signup-btn').trigger('click');
  $('.login-btn').click(function(){
    $('.secure-login').show('slow');
    $('.register-form').hide('slow');
    $('body').removeClass().addClass('login-slide');
  });
});

function mail_validation(){
    var mail = document.getElementById("URJC");
    var domain = mail.value.split("@");
    if(domain[1] == "alumnos.urjc.es"){
        return true;
    }else{
        mail.value = "";
        alert("Mail incorrecto");
        return false;
    }
}

function nif_validation(){
    var nif = document.getElementById("DNI");
    if(nif.value.length != 9){
        nif.value = "";
        alert("NIF incorrecto");
        return false
    }
    var numbers = nif.value.slice(0,8);
    var character = nif.value.slice(8,9);
    numbers = numbers % 23;
    mod_result='TRWAGMYFPDXBNJZSQVHLCKET';
    mod_result=mod_result.substring(numbers,numbers+1);
    if (mod_result!=character.toUpperCase()) {
        alert("NIF erroneo");
        nif.value = "";
        return false;
    }else{
        return true;
    }
}

function getnum(target){
    var text = target.replace(/\D/g,'');
    if (text != ""){
        return isNaN(text);
    }else{
        return true;
    }
}

function pwd_validation(){
    var password = document.getElementById("password");
    if(password.value.length < 8 || getnum(password.value)){
        password.value = "";
        alert("El password debe contener al menos 8 caracteres");
        return false;
    }else{
        return true;
    }
}

function pwd_confirmation(){
    var password = document.getElementById("password");
    var password_confirm = document.getElementById("pass_confirm");
    if (password.value == password_confirm.value){
        return true;
    }else{
        alert("Las password no coinciden");
        password_confirm.value = "";
        return false;
    }
}
