<?php
require_once 'helper/clsConexion.php';
class Producto{
    private $_modelo;
    private $_nombre;
    private $_descripcion;
    private $_precio;
    private $_stock;
    private $_foto;
    private $_estatus;
    //set
    public function setDatosProductos($mod,$nom,$desc,$prec,$sto,$fot){
        $this->_modelo=$mod;
        $this->_nombre=$nom;
        $this->_descripcion=$desc;
        $this->_precio=$prec;
        $this->_stock=$sto;
        $this->_foto=$fot;
    }
    // metodo insertar productos
    public function altaProductos(){
        try{
            $nombreFoto=$this->_foto['foto']['name'];
            $ruta='vista/catalogo/productos/'.$nombreFoto;
            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);

            $sql ="INSERT INTO productos values ('$this->_modelo','$this->_nombre','$this->_descripcion','$this->_precio','$this->_stock','$ruta',1)";

            $res=$this->_aplicarQuery($sql);
            return $res;
        }
        catch(Excepcion $e){
            echo "Error en la consulta".$e->getMessage();
        }
    }
    private function _aplicarQuery($consulta){
        $objConexion=new Conexion();
        $res=$objConexion->ejecutarConsulta($consulta);
        $objConexion=$objConexion->CerrarConexion();
        return $res;
    }

    public function productos(){
        $sql="SELECT * from productos where estatus = 1";
        $res=$this->_aplicarQuery($sql);
        return $res;
    }
    public function cancelarProducto(){
        $sql="UPDATE productos set estatus=0 where modelo='$this->_modelo'";
        $res=$this->_aplicarQuery($sql);
        return $res;
    }
    public function modificarProducto(){
        $sql="UPDATE productos set modelo='$this->_modelo',nombre='$this->_nombre',
        descripcion='$this->_descripcion',precio='$this->_precio',stock='$this->_stock' 
        where modelo='$this->_modelo'";
        $res=$this->_aplicarQuery($sql);
        return $res;
    }
}
?>