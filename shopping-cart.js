document.addEventListener('DOMContentLoaded', function () {
  // Obtén referencias a los elementos relevantes
  const addToCartBtn = document.getElementById('addToCartBtn');
  const cartOffcanvas = document.getElementById('offcanvas-shopping-cart');

  // Añade un listener al botón
  addToCartBtn.addEventListener('click', function () {
    // Lógica para agregar el producto al carrito (puedes personalizar esto)
    const productName = "Producto"; // Cambia esto por el nombre real del producto
    const productPrice = 19.99; // Cambia esto por el precio real del producto
    const productImageUrl = "prenda1.png"; // Cambia esto por la ruta real de la imagen

    // Crea un elemento para representar el producto en el carrito
    const productElement = document.createElement('div');
    productElement.innerHTML = `
      <img src="${productImageUrl}" alt="${productName}" width="100%">
      <p>${productName} - $${productPrice.toFixed(2)}</p>
      <button class="removeBtn">Eliminar</button>
    `;
    
    // Añade el listener para el botón de eliminación
    const removeBtn = productElement.querySelector('.removeBtn');
    removeBtn.addEventListener('click', function () {
      // Lógica para eliminar el producto del carrito
      productElement.remove();
      
      // Si el carrito está vacío, oculta el offcanvas
      if (cartOffcanvas.children.length === 0) {
        cartOffcanvas.style.display = 'none';
      }
    });

    // Agrega el elemento al offcanvas
    cartOffcanvas.appendChild(productElement);

    // Muestra el offcanvas
    cartOffcanvas.style.display = 'block';
  });
});
