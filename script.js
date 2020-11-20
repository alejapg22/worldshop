function mouseOver() {
    imagen[1].attributes[0].value = "imagenes/perro3.jpg";
    imagen[1].attributes[1].value = "50%";
  }
  
  //mouse afuera
  function mouseOut() {
    imagen[1].attributes[0].value = "imagenes/perro2.jpg";
    imagen[1].attributes[1].value = "50%";
  }

function(){
  	var formulario =document. getElemenstByName('formulario')[0],
  	elementos=formulario.elements,
  	boton=document.getElementById('btn');
    

  	var validarCorreo = function(){
  		if(formulario.correo.value ==0){
  			alert("debes ingresar un correo");
  		}

  	};

  	var validar = function(){
  		validarCorreo();
  	};


  	formulario.addEventlistener("submit",validar);
  }