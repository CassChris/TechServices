<?php include_once 'Views/templates/header.php'; ?>


    <section class="bg-black py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Sobre Nosotros</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?php echo BASE_URL; ?>assets/img/logo_tech_services.png" alt="About Hero" width="200">
                </div>
            </div>
        </div>
    </section>


    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestros Servicios</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-util text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicio de Delivery</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-util text-center"><i class="fa fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Envío y devolución</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-util text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promociones</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-util text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicio Tecnico Remoto</h2>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'Views/templates/footer.php'; ?>
</body>

</html>