<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    //vista about
    public function about()
    {
        $data['title'] = 'Sobre Nosotros';
        $this->views->getView('principal', "about", $data);
    }


    //vista shop
    public function shop($page)
    {
        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina = 5;
        $desde = ($pagina - 1) * $porPagina;
        $data['title'] = 'Nuestros productos';
        $data['productos'] = $this->model->getProductos($desde, $porPagina);
        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductos();
        $data['total'] = ceil($total['total'] / $porPagina);
        $this->views->getView('principal', "shop", $data);
    }

    //vista datail
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $id_categoria = $data['producto']['id_categoria'];
        $data['relacionados'] = $this->model->getAleatorios($id_categoria, $data['producto']['idproducto']);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }

    //vista categorias
    public function categoria($datos)
    {
        $id_categoria = 1;
        $page = 1;
        $array = explode(',', $datos);
        if (isset($array[0])) {
            if (!empty($array[0])) {
                $id_categoria = $array[0];
            }
        }

        if (isset($array[1])) {
            if (!empty($array[1])) {
                $page = $array[1];
            }
        }

        $pagina = (empty($page)) ? 1 : $page ;
        $porPagina = 5;
        $desde = ($pagina - 1) * $porPagina;

        $data['pagina'] = $pagina;
        $total = $this->model->getTotalProductosCat($id_categoria);
        $data['total'] = ceil($total['total'] / $porPagina);

        $data['productos'] = $this->model->getProductosCat($id_categoria,$desde,$porPagina);
        $data['title'] = 'Categorias';
        $data['id_categoria'] = $id_categoria;
        $this->views->getView('principal', "categoria", $data);
    }


     //vista contact
     public function contacts()
     {
         $data['title'] = 'Contactos';
         $this->views->getView('principal', "contact", $data);
     }

      //vista lista de deseos
      public function deseo()
      {
          $data['title'] = 'Tu lista de deseo';
          $this->views->getView('principal', "deseo", $data);
      }

       //obtener productos a partir de la lista deseo

        
        //obtener productos a partir de la lista carrito
        public function ListaProductos()
        {
             $datos = file_get_contents('php://input');
             $json = json_decode($datos,true);
             $array['productos'] = array();
             $total = 0.00;
             foreach ($json as $producto) {
                 $result = $this->model->getProducto($producto['idProducto']);
                 $data['idproducto'] = $result['idproducto'];
                 $data['nombre'] = $result['nombre'];
                 $data['precio'] = $result['precio'];
                 $data['cantidad'] = $producto['cantidad'];
                 $data['imagen'] = $result['imagen'];
                 $subtotal = $result['precio'] * $data['cantidad'];
                 $data['subTotal'] = number_format($subtotal,2);
                 array_push($array['productos'], $data);
                 $total += $subtotal;
             }
             $array['total'] = number_format($total,2);
             $array['totalPaypal'] = number_format($total, 2, '.', '');
             $array['moneda'] = MONEDA;
             echo json_encode($array, JSON_UNESCAPED_UNICODE);
             die();
        }

}

?>