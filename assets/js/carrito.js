const d = document;

const btnAddDeseo = d.querySelectorAll(".btnAddDeseo");
const btnAddCarrito = d.querySelectorAll(".btnAddCarrito");
const btnDeseo = d.querySelector("#btnCantidadDeseo");
const btnCarrito = d.querySelector("#btnCantidadCarrito");
const verCarrito = d.querySelector("#verCarrito");
const tableListaCarrito = d.querySelector("#tableListaCarrito tbody");

    //ver carrito 
    const myModal = new bootstrap.Modal(document.getElementById('myModal'));

let listaDeseo, listaCarrito;
// console.log(btnAddDeseo);

d.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("listaDeseo") != null) {
    listaDeseo = JSON.parse(localStorage.getItem("listaDeseo"));
  }
  if (localStorage.getItem("listaCarrito") != null) {
    listaCarrito = JSON.parse(localStorage.getItem("listaCarrito"));
  }
  for (let i = 0; i < btnAddDeseo.length; i++) {
      btnAddDeseo[i].addEventListener("click", function () {
          let idProducto = btnAddDeseo[i].getAttribute("prod");
          // alert(idProducto)
          agregarDeseo(idProducto);
        });
    }
    for (let i = 0; i < btnAddCarrito.length; i++) {
        btnAddCarrito[i].addEventListener("click", function () {
            let idProducto = btnAddCarrito[i].getAttribute("prod");
            //   alert(idProducto)
            agregarCarrito(idProducto, 1);
        });
    }
    cantidadDeseo();
    cantidadCarrito();


    verCarrito.addEventListener('click', function(){
        getListaCarrito();
        myModal.show();
    })
  
});

function eliminarListaDeseo(idProducto) {
  for (let i = 0; i < listaDeseo.length; i++) {
      if(listaDeseo[i]['idProducto'] == idProducto){
          listaDeseo.splice(i, 1);
      }
  }     
  localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));    
  getListaDeseo();
  cantidadDeseo();
  Swal.fire(
      'Aviso',
      'Producto eliminado de tu lista de deseos',
      'success'
    )
}


//agregar productos a la lista de deseos deseos
function agregarDeseo(idProducto) {
  if (localStorage.getItem("listaDeseo") == null) {
    listaDeseo = [];
  } else {
    let listaExiste = JSON.parse(localStorage.getItem("listaDeseo"));
    for (let i = 0; i < listaExiste.length; i++) {
      if (listaExiste[i]["idProducto"] == idProducto) {
        Swal.fire(
          "Aviso",
          "El producto ya se encuentra en tu lista de deseos",
          "warning"
        );
        return;
      }
    }
    listaDeseo.concat(localStorage.getItem("listaDeseo"));
  }
  listaDeseo.push({
    idProducto: idProducto,
    cantidad: 1,
  });
  localStorage.setItem("listaDeseo", JSON.stringify(listaDeseo));
  // color modal => #7066e0
  Swal.fire("Aviso", "Producto agregado a la lista de deseos", "success");
  cantidadDeseo();
}

function cantidadDeseo() {
    let listas = JSON.parse(localStorage.getItem("listaDeseo"));
    // console.log(listas);
    btnDeseo.textContent = listas != null ? listas.length : 0;
}

function cantidadCarrito() {
  let listas = JSON.parse(localStorage.getItem("listaCarrito"));
  // console.log(listas);
  btnCarrito.textContent = listas != null ? listas.length : 0;
}

//agregar productos al carrito
function agregarCarrito(idProducto, cantidad, accion = false) {
  if (localStorage.getItem("listaCarrito") == null) {
    listaCarrito = [];
  } else {
    let listaExiste = JSON.parse(localStorage.getItem("listaCarrito"));
    for (let i = 0; i < listaExiste.length; i++) {
      if (accion) {
        eliminarListaDeseo(idProducto);
        // cantidadCarrito();
      }
      if (listaExiste[i]["idProducto"] == idProducto) {
        Swal.fire(
          "Aviso",
          "El producto ya esta agregado al carrito",
          "warning"
        );
        return;
      }
    }
    listaCarrito.concat(localStorage.getItem("listaCarrito"));
  }
  listaCarrito.push({
    idProducto: idProducto,
    cantidad: cantidad,
  });
  localStorage.setItem("listaCarrito", JSON.stringify(listaCarrito));
  // color modal => #7066e0
  Swal.fire("Aviso", "Producto agregado al carrito", "success");
  cantidadCarrito();
}


//ver carrito
function getListaCarrito() {
    const url = base_url + "principal/listaProductos";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        // console.log(res);
        let html = "";
        res.productos.forEach((producto) => {
          html += `
                  <tr>
                      <td>                                
                          <img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="" width="100">
                      </td>
                      <td>${producto.nombre}</td>
                      <td>
                          <span class="badge bg-success">${res.moneda + " " + producto.precio}</span>
                      </td>
                      <td> 
                          <span class="badge bg-primary">${producto.cantidad}</span></td>
                      <td>
                          ${producto.subTotal}
                      </td>
                      <td>
                      <button class="btn btn-danger btnEliminarCart" type="button" prod="${producto.idproducto}"><i class="fas fa-trash"></i></button>
                      </td>
                  </tr>
                  `;
        });
        tableListaCarrito.innerHTML = html;
        // btnEliminarDeseo()
        d.querySelector('#totalGeneral span').textContent = res.total;
        btnEliminarCarrito();
      }
    };
  }

  
  function btnEliminarCarrito() {
    let listaEliminar = d.querySelectorAll('.btnEliminarCart')
    // console.log(listaEliminar);
    for (let i = 0; i < listaEliminar.length; i++) {
        listaEliminar[i].addEventListener('click', function(){
            let idProducto = listaEliminar[i].getAttribute('prod');
            // alert(idProducto);
            eliminarListaCarrito(idProducto);
        })
        
    }
  }
  
  function eliminarListaCarrito(idProducto) {
    for (let i = 0; i < listaCarrito.length; i++) {
        if(listaCarrito[i]['idProducto'] == idProducto){
            listaCarrito.splice(i, 1);
        }
    }     
    localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));    
    getListaCarrito();
    cantidadCarrito();
    Swal.fire(
        'Aviso',
        'Producto eliminado del carrito',
        'success'
      )
}
