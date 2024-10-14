<?php
require_once 'helper/clsConexion.php';
class Usuario{
    private $_nombre;
    private $_apellidos;
    private $_correo;
    private $_contrasena;
    private $_sexo;
    private $_perfil;
    //set
    public function setDatos($nom,$ape,$corr,$contra,$se){
        $this->_nombre=$nom;
        $this->_apellidos=$ape;
        $this->_correo=$corr;
        $this->_contrasena=$contra;
        $this->_sexo=$se;
    }
    public function InsertarUsuarios(){


        $sql="INSERT INTO usuarios Values('$this->_nombre','$this->_apellidos',
        '$this->_correo',sha2('$this->_contrasena',256),'$this->_sexo',2)";

        $res=$this->_aplicarQuery($sql);
        return $res;
    }
    private function _aplicarQuery($consulta){
        $objConexion=new Conexion();
        $res=$objConexion->ejecutarConsulta($consulta);
        $objConexion=$objConexion->CerrarConexion();
        return $res;
    }
    
    public function login(){
        $this->correo = htmlentities($this->_correo, ENT_QUOTES);

        $sql="SELECT nombre, perfil from usuarios where correo = '$this->_correo' 
        && contrasena = sha2('$this->_contrasena',256)";

        $res=$this->_aplicarQuery($sql);
        $valores=$res->fetch_assoc();
        return $valores;
    }
}
?>