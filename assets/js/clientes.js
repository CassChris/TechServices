
const tableLista = d.querySelector("#tableListaProductos tbody");

d.addEventListener("DOMContentLoaded", function () {
  if (tableLista) {
    getListaProductos();
  }
});

//ver carrito
function getListaProductos() {
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
                  </tr>
                  `;
        });
        tableLista.innerHTML = html;
        // btnEliminarDeseo()
        d.querySelector('#totalProductos span').textContent = res.moneda + " " + res.total;
      }
    };
  }
