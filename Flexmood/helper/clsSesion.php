<?php
class Sesion{
    public function __construct(){
        session_start();
    }
    public function crearVariable($nombre,$valor){
        $_SESSION[$nombre]=$valor;
    }
    public function borrarVariable($nombre){
        // session_destroy(); //borra todos los elementos del arreglo
        unset($_SESSION[$nombre]);
    }
}
?>