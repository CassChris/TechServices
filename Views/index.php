<?php include_once 'Views/templates/header.php'; ?>

  <!-- Carrusel -->
  <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/1.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="h1 text-util"><b>Laptop</b> Core i7</h1>
                <h3 class="h2">Lorem ipsum dolor sit amet.</h3>
                <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis cum iste beatae itaque impedit dolorem distinctio repudiandae quae harum, molestias officiis numquam optio, corrupti in ea voluptate? Aliquid, recusandae. Quis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/2.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Camara de Seguridad</h1>
                <h3 class="h2">Lo mejor para la seguridad de tu hogar</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto iure deserunt a esse ad odit numquam sunt laborum eius recusandae tempore modi iste laboriosam ipsa quos, minus nostrum similique obcaecati!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/3.png" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Impresora</h1>
                <h3 class="h2">Las mejores impresoras del mercado</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa maxime recusandae voluptatum minus aliquam illum, eum aut. Praesentium porro adipisci sequi ut optio veniam, delectus, fugit maiores quidem eaque dolorem.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <!-- fin carrusel -->


  <!-- Inicio categorias-->
  <section class="container py-5">
    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Categorias</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptatibus!
        </p>
      </div>
    </div>
    <div class="row">
      <?php foreach ($data['categoria'] as $cat) { ?>
        <div class="col-12 col-md-3 p-5 mt-3">
          <!-- <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/categoria1.jpg" class="rounded-circle img-fluid border"></a> -->
          <a href="<?php echo BASE_URL . 'principal/categoria/' . $cat['idcategoria']?>"><img src="<?php echo $cat['imagen'];?>" class="rounded-circle img-fluid border"></a>
          <h5 class="text-center mt-3 mb-3"><?php echo $cat['categoria'];?></h5>
        </div>
      <?php }?>
    </div>
  </section>
  <!-- Fin categorias -->


  <!-- Productos -->
  <section class="bg-black">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Productos</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci!
          </p>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data['nuevoProducto'] as $product) {
        ?>
        
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100 bg-light">
            <a href="<?php echo BASE_URL . 'principal/detail/' . $product['idproducto']; ?>">
              <img src="<?php echo $product['imagen']; ?>" class="card-img-top" alt="<?php echo $product['nombre']; ?>">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-warning fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                  <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $product['precio']; ?></li>
              </ul>
              <a href="<?php echo BASE_URL . 'principal/detail/' . $product['idproducto']; ?>" class="h2 text-decoration-none text-dark"><?php echo $product['nombre']; ?></a>
              <p class="card-text">
              <?php echo $product['descripcion']; ?>
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
    </div>
  </section>
  <!-- fin productos -->
  
  <?php include_once 'Views/templates/footer.php'; ?>
</body>

</html>