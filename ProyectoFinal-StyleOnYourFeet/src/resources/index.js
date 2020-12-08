localStorage.clear(); // Para limpiar el localstorage, esto simplement para la demostración de como almacenar algo en el localstorage y desplegarlo en html

// Variables para obtener algunos elemtos html
const addCart_Btn = document.getElementById("cart"); // Boton del carrito
const productName = document.getElementById("articleName"); // Tag que contiene el nombre del producto
const productPrice = document.getElementById("price"); // Tag que contiene el precio del producto

// Console logs para verificar que este usando la información correcta
console.log("Producto: " + productName.innerText);
console.log("Precio: " + productPrice.innerText);

// Even onclick que almacena el nombre y precio del producto dentro del Localstorage
addCart_Btn.onclick = function () {
    var name = "Producto"; // Key: "Producto"
    var price = "Precio"; // Key: "Precio"

    localStorage.setItem(name, productName.innerText); // Nombre del producto guardado
    localStorage.setItem(price, productPrice.innerText); // Precio del producto guardado

    // Línea para redireccionar a la pagina del carrito.
    window.location.href = 'http://localhost/ProyectoFinal-StyleOnYourFeet/purchasePage.php';
};
