document.addEventListener("DOMContentLoaded",

function(ngjarja) {

const BtnSubmit = document.getElementById('Btn-submit');


const validate = (ngjarja) => {

const perdoruesi = document.getElementById('userId');
const emailin = document.getElementById('emailId');
const fjalkalimi = document.getElementById('pass');
if (perdoruesi.value === "") {
alert("Ju lutem shtoni Username!");
perdoruesi.focus();
return false;
}

if (emailin.value === "") {
alert("Ju lutem shtoni email-in!");
emailin.focus();
return false;
}
if (fjalkalimi.value === "") {
    alert("Ju lutem shkruani password-in!");
    fjalkalimi.focus();
    return false;
    }
    

return true; 
}

BtnSubmit.addEventListener('click', validate);
});
