<?php
$peticion ='inicio';
extract($_REQUEST);
require_once 'helper/clsSesion.php';
$objSesion = new Sesion();
if(!isset($_SESSION['usuario'])){

    switch($peticion){
            case 'inicio':
                require_once 'vista/home.php';
            break;
            case 'productos':
                require_once 'vista/productos.php';
            break;
            case 'contacto':
                require_once 'vista/contacto.php';
            break;
            case 'servicio':
                require_once 'vista/servicio.php';
            break;
            case 'iniciars':
                require_once 'vista/iniciars.php';
            break;
            case 'registrarse':
                require_once 'vista/registrarse.php';
            break;
            case 'guardarUsuario':
                require_once 'modelo/clsUsuario.php';
                $objUsuario=new Usuario();
                $objUsuario->setDatos($nombre,$apellidos,$correo,$contrasena,$sexo);
                $datos=$objUsuario->InsertarUsuarios();
                require_once 'vista/registrarse.php';
            break;
            case 'ingresar':
                require_once 'modelo/clsUsuario.php';
                $objUsuario=new Usuario();
                $objUsuario->Setdatos(null,null,$correo,$contrasena,null);
                $datos=$objUsuario->login();

                if(isset($datos['perfil'])){
                    $objSesion->crearVariable('usuario',$datos);
                    
                    if ($datos['perfil'] == 2) {
                        header('location:?peticion=perfilCliente');
                    }else{
                        header('location:?peticion=perfilAdmin');
                    }
                }
                require_once 'vista/iniciars.php';
            break;
            default:
                header('location:home.php');
            break;
        }
    }
        // sesion admin 
        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 1)

        switch ($peticion) {
            case 'perfilAdmin':
                require_once 'vista/admin.php';
                break;
            case 'registroProducto':
                require_once 'vista/registroProductos.php';
            break;
            case 'guardarProducto':
                require_once 'modelo/clsProducto.php';
                $objProducto= new Producto();
                $objProducto-> setDatosProductos($modelo,$nombre,$descripcion,$precio,$stock,$_FILES);
                $datos=$objProducto-> altaProductos();
                require_once 'vista/registroProductos.php';
            break;
            case 'productosAdmin':
                require_once 'modelo/clsProducto.php';
                $objProducto=new Producto();
                $datos = $objProducto->productos();
                require_once 'vista/productosAdmin.php';
            break;
            case 'cancelar':
                require_once 'modelo/clsProducto.php';
                $objProducto=new Producto();
                $objProducto->setDatosProductos($modelo,null,null,null,null,null);
                $objProducto->cancelarProducto();
                $datos=$objProducto->productos();
                require_once 'vista/productosAdmin.php';
            break;
            
            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                require_once 'vista/home.php';
                break;
            default:
            header('location:?peticion=perfilAdmin');
            break;
        }

        // session usuario
        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 2)
        switch ($peticion) {
            case 'perfilCliente':
                require_once 'vista/cliente.php';
            break;
            case 'productosCliente':
                require_once 'modelo/clsProducto.php';
                $objProducto=new Producto();
                $datos = $objProducto->productos();
                require_once 'vista/productosCliente.php';
            break;
            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                require_once 'vista/home.php';
                break;
        }

?>