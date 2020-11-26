

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