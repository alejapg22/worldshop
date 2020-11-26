class Carrito{

comprarProducto(e){
  e.preventDefault();
   //Delegado para agregar al carrito
 if(e.target.classList.contains('agregar-carrito')){
 const producto = e.target.parentElement.parentElement;
//Enviamos el producto seleccionado para tomar sus datos
  this.leerDatosProducto(producto);

    }
    }

    leerDatosProducto(producto){
        const infoProducto = {
            imagen : producto.querySelector('img').src,
            titulo: producto.querySelector('h4').textContent,
            precio: producto.querySelector('.precio span').textContent,
            id: producto.querySelector('a').getAttribute('data-id'),
            cantidad: 1
        }
        let productosLS;
        productosLS =this.obtenerProductosLocalStorage();
        productosLS.forEach(function(productosLS){
          if(productosLS.id === infProducto.id){
            productosLS = productosLS.id;
          }
        });
        if(productosLS === infoProducto.id){
            Swal.fire({
                type: 'info',
                title: 'Oops...',
                text: 'El producto ya está agregado',
                showConfirmButton: false,
                timer: 1000
            })
        }
        else {
            this.insertarCarrito(infoProducto);
        }
}
 insertarCarrito(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
                <a href="#"class="borrar-producto fas fa-times-circle"  data-id="${producto.id}"></a>
            </td>
          `;
          listaProductos.appendChild(row);
          this.guardarProductosLocalStorage(producto);

}
eliminarProducto(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productoID = producto.querySelector('a').getAttribute('data-id');
        }
       this.eliminarProductoLocalStorage(productoID);
    
}

vaciarCarrito(e){
        e.preventDefault();
        while(listaProductos.firstChild){
            listaProductos.removeChild(listaProductos.firstChild);
        }
        this.vaciarLocalStorage();

        return false;
}
  guardarProductosLocalStorage(producto){
        let productos;
    
        productos = this.obtenerProductosLocalStorage();
        
        productos.push(producto);
        
        localStorage.setItem('productos', JSON.stringify(productos));
    } 
      obtenerProductosLocalStorage(){
        let productoLS;

        
        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }
     eliminarProductoLocalStorage(productoID){
        let productosLS;
        
        productosLS = this.obtenerProductosLocalStorage();
      
        productosLS.forEach(function(productoLS, index){
            if(productoLS.id === productoID){
                productosLS.splice(index, 1);
            }
        });

       
        localStorage.setItem('productos', JSON.stringify(productosLS));
}
leerLocalStorage(){
    let productosLS;
    productosLS = this.obtenerProductosLocalStorage();
    productosLS.forEach(function(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
                <a href="#"class="borrar-producto fas fa-times-circle"  data-id="${producto.id}"></a>
            </td>
          `;
          listaProductos.appendChild(row);

    });
}
leerLocalStorageCompra(){
    let productosLS;
    productosLS = this.obtenerProductosLocalStorage();
    productosLS.forEach(function(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td>
            <input type="number" class="form-control cantidad" min="1" value=${producto.cantidad}>
            </td>
            <td>${producto.precio * producto.cantidad}</td>
            <td>
                <a href="#"class="borrar-producto fas fa-times-circle"  data-id="${producto.id}"></a>
            </td>
          `;
          listaCompra.appendChild(row);

    });
}
vaciarLocalStorage(){
        localStorage.clear();
    }
  procesarPedido(e){
        e.preventDefault();

        if(this.obtenerProductosLocalStorage().length === 0){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El carrito está vacío, agrega algún producto',
                showConfirmButton: false,
                timer: 2000
            })
        }
        else {
            location.href = "compra.html";
    
    }

    }
}