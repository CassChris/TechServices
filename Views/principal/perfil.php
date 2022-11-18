<?php include_once 'Views/templates/header.php'; ?>


<div class="container py-5">
    <div class="row">

        <?php
        if ($data['verificar']['verify'] == 1) { ?>

            <div class="col-md-8">
                <div class="table-responsive">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover align-middle" id="tableListaProductos">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-end">
                        <h3 id="totalProductos">Total a pagar: <span class="bg-success rounded p-1"></span></h3>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <img src="<?php echo BASE_URL . 'assets/img/logo_tech_services.png' ?>" width="150" class="img-fluid rounded-circle" alt="">
                        <hr>
                        <p><i class="fas fa-user"></i> <?php echo  $_SESSION['nombreCliente']; ?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo  $_SESSION['correoCliente']; ?></p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        PayPal
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Otros metodos de Pago
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the second
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } else { ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div class="h3">
                    VERIFICA TU CORREO ELECTRONICO
                </div>
            </div>
        <?php } ?>

        
    </div>

</div>


<?php include_once 'Views/templates/footer.php'; ?>
<script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>
</body>

</html>