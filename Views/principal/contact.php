<?php include_once 'Views/templates/header.php'; ?>

<div class="container-fluid bg-black py-5 text-white">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1 logo">Contáctanos</h1>
        <p>
            Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet.
        </p>
    </div>
</div>


<div class="container py-5">
    <div class="card-body shadow-lg border rounded">
        <div class="row py-5 border-1">
            <form class="col-md-9 m-auto contact__form" method="post" role="form" >
                <div class="content__form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nombre</label>
                        <input type="text" class="form-control mt-1" placeholder="Ingresar Nombre" name="form__name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]{1,50}$" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Correo</label>
                        <input type="email" class="form-control mt-1"  placeholder="Ingresar Correo" name="form__email" pattern="^[A-Za-z0-9]+(\.[A-Za-z0-9]+|-[A-Za-z0-9]+|_[A-Za-z0-9]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,15})$" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Asunto</label>
                    <input type="text" class="form-control mt-1" placeholder="Ingresar Asunto" placeholder="Ingresar Asunto" name="form__subject" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]{1,150}$" required>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mensaje</label>
                    <textarea class="form-control mt-1" name="form__text" placeholder="Ingresar Mensaje" rows="8" maxlength="1000" required></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3" value="Enviar" onclick="contactForm();">Enviar Mensaje</button>
                    </div>
                </div>
                </div>
                <div class="contact-form-loader d-none text-center">
                    <img src="<?php echo BASE_URL . 'assets/img/circles.svg'?>" alt="Cargando">
                </div>
                <div class="contact-form-response">
                </div>
            </form>
        </div>
    </div>
</div>



<?php include_once 'Views/templates/footer.php'; ?>
</body>

</html>