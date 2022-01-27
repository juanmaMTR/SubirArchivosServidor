<?php
    $directorio='../uploads/';
    if(is_dir($directorio)){
        $abrirDirectorio=opendir($directorio);
        while(($archivo=readdir($abrirDirectorio))!== false){
            //Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                echo $archivo."<br />";
            }
        }
        closedir($abrirDirectorio);
    }else{
        echo 'Esto no es una ruta válida';
    }
    echo '<a href="../../index.html">Volver al inicio</a>'
?>