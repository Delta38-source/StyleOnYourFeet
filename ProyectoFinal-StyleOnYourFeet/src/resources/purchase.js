// Log para verificar si los datos se guardaron luego de pasar de pagina
console.log(localStorage)

// Variables para los tags html
var cartArea = document.getElementById("currentProducts");
var totalPay = document.getElementById("buyStuff");

// Este IF verifica si existen los keys "Producto" y "Precio" en el Localstorage
// Si da true, entonces significa que hay productos en el carrito
// Si da false, entonces no hay productos en el carrito
if (localStorage.getItem("Producto") && localStorage.getItem("Precio")){
    // Se crea un nuevo tag h3 donde se muestra el nombre del producto dentro del localstorage
    cartArea.innerHTML = '<h3>Carrito</h3>' + 
    '<h3>' + localStorage.getItem("Producto") + '</h3>';

    // Se crea un nuevo tag h3 donde se muestra el precio del producto dentro del localstorage
    totalPay.innerHTML = 
    '<h2>Total a pagar</h2>' + 
    '<h3>' + localStorage.getItem("Precio") + '</h3>';
} else{ // Else donde se le avisa al usuario que no hay productos en el carrito
    cartArea.innerHTML = '<h3>Carrito</h3>' + 
    '<h3>No hay productos en el carrito</h3>';
}