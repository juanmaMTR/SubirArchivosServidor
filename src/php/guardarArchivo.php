<?php
    /*Juan Manuel Toscano Reyes <jtoscanoreyes.guadalupe@alumnado.fundacionloyola.net>*/
    $dir_subida='..\uploads';
    //$_FILES['fichero']['fichero'];
    print_r($_FILES);
    $tmp_name=$_FILES["fichero"]["tmp_name"];
    $name = basename($_FILES["fichero"]["name"]);
    move_uploaded_file($tmp_name, $dir_subida.'/'.$name);
?>