document.getElementById("imagenhombre2").onmouseover = function() {mouseOver()};
document.getElementById("imagenhombre2").onmouseout = function() {mouseOut()};
var imagen = document.getElementsByTagName("img");

function mouseOver() {
    imagen[1].attributes[0].value = "img/hombre.jpg";
    imagen[1].attributes[1].value = "50%";
  }
  
  //mouse afuera
  function mouseOut() {
    imagen[1].attributes[0].value = "img/hombre2";
    imagen[1].attributes[1].value = "50%";
  }

