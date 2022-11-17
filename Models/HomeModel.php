<?php
class HomeModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategoria()
    {
        $sql = "SELECT * FROM categoria";
        return $this->selectAll($sql);
    }
    public function getNuevoProducto()
    {
        $sql = "SELECT * FROM producto ORDER BY idproducto DESC LIMIT 10";
        return $this->selectAll($sql);
    }
}
 
?>