<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="jtoscanoreyes.guadalupe@alumnado.fundacionloyola.net">
        <link rel="stylesheet" href="../css/style.css">
        <title>Subida de Archivos</title>
    </head>
    <body>
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
    </body>
</html>
