<?php
class ClientesModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function registroDirecto($nombre,$correo,$clave,$token)
    {
        $sql = "INSERT INTO cliente (nombre,correo, clave,token) VALUES (?,?,?,?)";
        $datos = array($nombre,$correo,$clave,$token);
        $data = $this->insertar($sql,$datos);
        if ($data > 0) {
            $res = $data;
        } else {
            $res = 0;
        }
        
        return $res;
        
    }
    //token
    public function getToken($token)
    {
        $sql = "SELECT * FROM cliente WHERE token = '$token'";
        return $this->select($sql);
        
    }
    //actualizacion del verificador de 0 a 1
    public function actualizarVerify($id)
    {
        $sql = "UPDATE cliente SET token=?, verify=? WHERE idcliente=?";
        $datos = array(null,1,$id);
        $data = $this->save($sql,$datos);
        if ($data == 1) {
            $res = $data;
        } else {
            $res = 0;
        }
        return $res;
    }

    // verificar correo
    public function getVerificar($correo)
    {
        $sql = "SELECT * FROM cliente WHERE correo = '$correo'";
        return $this->select($sql);
    }
    

    //registrar pedido
    public function registrarPedido($id_transaccion,$monto,$estado,$fecha,$email,$nombre,$apellido,$direccion,$ciudad,$email_user)
    {
        $sql = "INSERT INTO pedido (id_transaccion,monto,estado,fecha,email,nombre,apellido,direccion,ciudad,email_user) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $datos = array($id_transaccion,$monto,$estado,$fecha,$email,$nombre,$apellido,$direccion,$ciudad,$email_user);
        $data = $this->insertar($sql,$datos);
        if ($data > 0) {
            $res = $data;
        } else {
            $res = 0;
        }
        
        return $res;
        
    }
}
 
?>