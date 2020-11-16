document.getElementById("imagenhombre1").onmouseover = function() {mouseOver()};
document.getElementById("imagenhombre1").onmouseout = function() {mouseOut()};
var imagen = document.getElementsByTagName("img");

function mouseOver() {
  document.getElementById("imagenhombre1").attributes[0].value = "img/hombre2.jpg";
}

  //mouse afuera
  function mouseOut() {
    document.getElementById("imagenhombre1").attributes[0].value = "img/hombre1.jpg";
}

document.getElementById("imagenmujer1").onmouseover = function() {mouseOver1()};
document.getElementById("imagenmujer1").onmouseout = function() {mouseOut1()};
var imagen = document.getElementsByTagName("img");

function mouseOver1() {
  document.getElementById("imagenmujer1").attributes[0].value = "img/mujer2.jpg";
}

  //mouse afuera
  function mouseOut1() {
    document.getElementById("imagenmujer1").attributes[0].value = "img/mujer1.jpg";
}


 
 