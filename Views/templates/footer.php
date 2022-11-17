<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-black text-white">
        <h5 class="modal-title"><i class="fas fa-cart-arrow-down"></i>Carrito</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover align-middle" id="tableListaCarrito">
            <thead>
              <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

        </div>
      </div>
      <div class="d-flex justify-content-around bg-black p-3 text-white">

        <h3 id="totalGeneral">Total: <span></span></h3>
        <?php if (!empty($_SESSION['correoCliente'])) { ?>
          <a class="btn btn-outline-success" href="<?php echo BASE_URL . 'clientes'; ?>">Procesar Pedido</a>
        <?php }else{ ?>   
            <a class="btn btn-outline-success" href="#" onclick="abrirModalLogin();">Login</a>
        <?php } ?>
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Login Directo -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-black text-white">
        <h5 class="modal-title" id="titleLogin">Iniciar Sesión</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="get">
          <div class="text-center">
            <img src="<?php echo BASE_URL . 'assets/img/logo_tech_services.png' ?>" width="100" class="rounded-circle img-fluid" alt="img-user">
          </div>
          <div class="row">
            <div class="col-md-12" id="frmLogin">
              <div class="form-group mb-3">
                <label for="correoLogin"><i class="fas fa-envelope"></i> Correo</label>
                <input type="text" name="correoLogin" placeholder="Correo Electrónico" id="correoLogin" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              
              <div class="form-group mb-3">
                <label for="claveLogin"><i class="fas fa-key"></i> Contraseña</label>
                <input type="password" name="claveLogin" placeholder="Contraseña" id="claveLogin" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <a href="#" id="btnRegister">Todavia no tienes una cuenta?</a>
              <div class="float-end">
                <button class="btn bg-util text-white btn-lg" type="button" id="login">Login</button>
              </div>
            </div>
            
            
            <!-- formulario de registro -->
            <div class="col-md-12 d-none" id="frmRegister">
              <div class="form-group mb-3">
                <label for="nombreRegistro"><i class="fas fa-user"></i> Nombre</label>
                <input type="text" name="nombreRegistro" placeholder="Nombre Completo" id="nombreRegistro" class="form-control" placeholder="Nombre" aria-describedby="helpId">
              </div>

              <div class="form-group mb-3">
                <label for="correoRegistro"><i class="fas fa-envelope"></i> Correo</label>
                <input type="text" name="correoRegistro" placeholder="Correo Electrónico" id="correoRegistro" class="form-control" placeholder="Correo Electrónico" aria-describedby="helpId">
              </div>
              
              <div class="form-group mb-3">
                <label for="claveRegistro"><i class="fas fa-key"></i> Contraseña</label>
                <input type="password" name="claveRegistro" placeholder="Contraseña" id="claveRegistro" class="form-control" placeholder="Contraseña" aria-describedby="helpId">
              </div>
              <a href="#" id="btnLogin">Ya tienes una cuenta?</a>
              <div class="float-end">
                <button class="btn btn-primary btn-lg" type="button" id="registrarse">Registrarse</button>
              </div>  
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
  <div class="container">
    <div class="row">

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-util border-bottom pb-3 border-light logo">Ubicanos</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li>
            <i class="fas fa-map-marker-alt fa-fw"></i>
            123 Ubicación - Prueba
          </li>
          <li>
            <i class="fa fa-phone fa-fw"></i>
            <a class="text-decoration-none" href="tel:010-020-0340">987654321</a>
          </li>
          <li>
            <i class="fa fa-envelope fa-fw"></i>
            <a class="text-decoration-none" href="mailto:info@company.com">techservices@gmail.com</a>
          </li>
        </ul>
      </div>

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li><a class="text-decoration-none" href="#">Case</a></li>
          <li><a class="text-decoration-none" href="#">Perifericos</a></li>
          <li><a class="text-decoration-none" href="#">Laptops</a></li>
          <li><a class="text-decoration-none" href="#">Sonido</a></li>
          <li><a class="text-decoration-none" href="#">Video</a></li>
          <li><a class="text-decoration-none" href="#">Otros</a></li>
        </ul>
      </div>

      <div class="col-md-4 pt-5">
        <h2 class="h2 text-light border-bottom pb-3 border-light">Informacion adicional</h2>
        <ul class="list-unstyled text-light footer-link-list">
          <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>">Inicio</a></li>
          <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>/principal/about">Sobre Nosotros</a></li>
          <!-- <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>/principal/shop">Shop Locations</a></li> -->
          <!-- <li><a class="text-decoration-none" href="#">Preguntas</a></li> -->
          <li><a class="text-decoration-none" href="<?php echo BASE_URL; ?>/principal/contacts">Contacto</a></li>
        </ul>
      </div>

    </div>

    <div class="row text-light mb-4">
      <div class="col-12 mb-3">
        <div class="w-100 my-3 border-top border-light"></div>
      </div>
      <div class="col-auto me-auto">
        <ul class="list-inline text-left footer-icons">
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
          </li>
          <li class="list-inline-item border border-light rounded-circle text-center">
            <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
          </li>
        </ul>
      </div>
      <!-- <div class="col-auto">
        <label class="sr-only" for="subscribeEmail">Email address</label>
        <div class="input-group mb-2">
          <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
          <div class="input-group-text btn-util text-light">Subscribe</div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="w-100 bg-black py-3">
    <div class="container">
      <div class="row pt-2">
        <div class="col-12">
          <p class="text-center text-light">
            Copyright &copy; Christian Casafranca 2022
          </p>
        </div>
      </div>
    </div>
  </div>

</footer>
<!-- Fin Footer -->

<!-- Start Script -->
<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/all.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/sweetalert2.all.min.js"></script>
<script>
  const base_url = '<?php echo BASE_URL; ?>';
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
<!-- End Script -->