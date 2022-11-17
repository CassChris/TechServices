<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM producto p INNER JOIN categoria c ON p.id_categoria = c.idcategoria WHERE p.idproducto = $id_producto";
        return $this->select($sql);
    }

    public function getProductos($desde,$porPagina)
    {
        $sql = "SELECT * FROM producto LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }

    //Obtener total productos paginacion
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM producto";
        return $this->select($sql);
    }

    //productos relacionados con la categoria
    public function getProductosCat($id_categoria, $desde, $porPagina)
    {
        $sql = "SELECT * FROM producto WHERE id_categoria = $id_categoria LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }

    //obtener total productos relacionados con la categoria
    public function getTotalProductosCat($id_categoria)
    {
        $sql = "SELECT COUNT(*) AS total FROM producto WHERE id_categoria = $id_categoria";
        return $this->select($sql);
    }

    //productos relacionados con la categoria aleatorios
    public function getAleatorios($id_categoria, $id_producto)
    {
        $sql = "SELECT * FROM producto WHERE id_categoria = $id_categoria AND idproducto != $id_producto ORDER BY RAND() LIMIT 20";
        return $this->selectAll($sql);
    }


}
 
?>