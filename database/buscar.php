<?php

include 'api.php';

/* Zona de Ejecución */
$info = new Respuesta;
$info->estado = "";
$info->datos= "";

if ($_POST) {
    if (isset($_POST['modo']) ) {
        
        $modo = ValidarDatos($_POST['modo']);

        switch ($modo) {
            //Modo 1: Datos del perfil del usuario
            
            case '1':
                $ci = $_POST['ci'];
                $info = Datos_perfil($ci);

                break;
            //Modo 2: Buscar libros
            case '2':
                $info = registrar_usuario();
                break;
            default:
                # code...
                break;
        }
    }
}

$json = TransformarEnJSON($info);
MostrarJSON($json);


class Datos_U{
    public $ci;
    public $nombre_p;
    public $numero_contacto;
    public $email;
    public $direccion;
    public $descripcion;

}






























?>