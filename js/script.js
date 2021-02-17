$(document).ready(function(){
        $("#myCarousel").carousel();
});

let passField = document.getElementById("password");
emailField.onfocus = function(){
  if(passField.value == "your password"){
    passField.value= "";
  }
};
passField.onblur = function(){
  if (passField.value == ""){
    passField.value = "your password";
  }
};

function simpleMessage(){
  alert("Get Directions to the Chaple");
}
 setTimeout(simpleMessage, 1000);
 

