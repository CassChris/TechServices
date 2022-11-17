const btnAddCart = d.querySelector("#btnAddCart"),
    cantidad = d.querySelector("#product-quanity"),
    idProducto = d.querySelector("#idProducto");

d.addEventListener("DOMContentLoaded", function(){
    btnAddCart.addEventListener('click', function(){
        agregarCarrito(idProducto.value, cantidad.value);
        console.log(cantidad.value);
    })
})