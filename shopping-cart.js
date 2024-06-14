
    document.addEventListener('DOMContentLoaded', function () {
      const productosContainer = document.getElementById('productos');
      const carritoContainer = document.getElementById('carrito');

      // Función para agregar producto al carrito
      function agregarAlCarrito(producto) {
        const { id, nombre, precio, imagen } = producto;

        // Crea un elemento para representar el producto en el carrito
        const productElement = document.createElement('div');
        productElement.classList.add('card', 'mb-3');
        productElement.innerHTML = `
          <div class="row g-0">
            <div class="col-md-4">
              <img src="${imagen}" alt="${nombre}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">${nombre}</h5>
                <p class="card-text">$${precio} COP</p>
                <button class="btn btn-danger removeBtn">Eliminar</button>
              </div>
            </div>
          </div>
        `;

        // Añade el listener para el botón de eliminación
        const removeBtn = productElement.querySelector('.removeBtn');
        removeBtn.addEventListener('click', function () {
          // Lógica para eliminar el producto del carrito
          productElement.remove();
        });

        // Agrega el elemento al offcanvas
        carritoContainer.appendChild(productElement);
      }

      // Lógica para obtener los productos (simulada)
      const productos = [
        {
          id: 1,
          nombre: 'Camisa',
          precio: 25000,
          imagen: 'camisa.jpg'
        },
        {
          id: 2,
          nombre: 'Pantalón',
          precio: 35000,
          imagen: 'pantalon.jpg'
        }
        // Puedes agregar más productos aquí
      ];

      // Muestra los productos
      productos.forEach(producto => {
        const { id, nombre, precio, imagen } = producto;
        const productCard = `
          <div class="col">
            <div class="card">
              <img src="${imagen}" class="card-img-top" alt="${nombre}">
              <div class="card-body">
                <h5 class="card-title">${nombre}</h5>
                <p class="card-text">$${precio} COP</p>
                <button class="btn btn-primary addToCartBtn" data-id="${id}">Añadir al carrito</button>
              </div>
            </div>
          </div>
        `;
        productosContainer.innerHTML += productCard;
      });

      // Añade un listener para todos los botones "Añadir al carrito"
      const addToCartBtns = document.querySelectorAll('.addToCartBtn');
      addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function () {
          const productId = parseInt(btn.getAttribute('data-id'));
          const productoSeleccionado = productos.find(producto => producto.id === productId);
          if (productoSeleccionado) {
            agregarAlCarrito(productoSeleccionado);
          }
        });
      });
    });
