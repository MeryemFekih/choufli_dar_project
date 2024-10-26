
function sgin_in_validation()
{
    var fname=document.getElementById("fname").value;
    var birth=document.getElementById("birth").value;
    var tel=document.getElementById("tel").value;
    var pass2=document.getElementById("pass_sign_in").value;
    var cin=document.getElementById("cin").value;
    var genre=document.getElementByIdg("gender").value;
    alpha=/^[A-Za-z]+$/
    
    if (((fname.match(alpha))==null)||(fname.length()==0)){
        alert("verifier votre nom")
    }
    if (((isNaN(tel)))||(tel.length()!=8)){
        alert("verifier votre tel");
        return false ;
    }
    if(pass2.length()<8)
    {
        alert("your password length <8");
    }
    if (((isNaN(cin)))||(cin.length()!=8)){
        alert("verifier votre cin");
        return false ;
    }
    if (gender == "") {
        alert("Veuillez sélectionner votre genre.");
        return false;
    }
    if (today.getTime() - birth.getTime() < 18 * 365 * 24 * 60 * 60 * 1000) {
        alert("Vous devez avoir au moins 18 ans pour vous inscrire.");
        return false;
    }
    return true;

}

