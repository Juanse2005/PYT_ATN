<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img-logo-atn.png">
    <title>Pago | ATN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
        }
    </style>
</head>

<body>

    <div class="container form-container">
        <h1 class="text-center mb-4">Formulario de Pago con Tarjeta de Crédito</h1>
        <form action="procesar_pago.php" method="post" id="payment-form">
            <div class="form-group">
                <label for="nombre_tarjeta">Nombre en la Tarjeta</label>
                <input type="text" class="form-control" id="nombre_tarjeta" name="nombre_tarjeta" required>
            </div>
            <div class="form-group">
                <label for="numero_tarjeta">Número de Tarjeta</label>
                <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fecha_vencimiento">Fecha de Vencimiento</label>
                    <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento"
                        placeholder="MM/AA" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" maxlength="4" required>
                </div>
            </div>
            <div class="form-group">
                <label for="monto">Monto a Pagar</label>
                <input type="text" class="form-control" id="monto" name="monto" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección de Facturación</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Pagar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Footer -->
    <?php include ('footer.php') ?>
</body>

</html>