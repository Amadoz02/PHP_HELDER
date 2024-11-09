<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "<pre>";
// var_dump($_FILES);

if (isset($_FILES['archivo'])){
    $errores= array();
    $temporal = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = $_FILES['archivo']['name'];
    $tamaño_archivo = $_FILES['archivo']['size'];
    $type_archivo = $_FILES['archivo']['type'];
    $type_archivo = $_FILES['archivo']['error'];

    $bandera = explode('.', $nombre_archivo);
    $archivo_extencion= strtolower(end($bandera));
    // echo $nombre_archivo +"<br>";
    var_dump($archivo_extencion);
    $extenciones = array("jpeg", "png", "jpg");
    $cont=0;
    echo $tamaño_archivo;
    if(in_array($archivo_extencion, $extenciones)===false){
        $errores[]="extencionn no permitida";

    }else{
        foreach ($nombre_archivo as $clave=> $nombre_archivo){
            $cont+=1;
        }
    }
    echo $cont;

    // if (filesize('archivo')<2000000){
    //     echo"hola";
    // }
    if($tamaño_archivo>2097152){
        $errores[]="tamaño max permitido es 2mb";
    }
    $nombre_usu= $_REQUEST['nombre'];
    if(empty($errores)){
        move_uploaded_file($temporal, "imagenes/$nombre_usu.$archivo_extencion");
    }

    
}else{
    echo"no envio archivos";
}

// echo $nombre_archivo;