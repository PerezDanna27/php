<?php

$resultado=null;
if (isset($_POST['formulario'])) {
    $name =$_FILES['imagen']['name'];
    $tmp_name = $_FILES['imagen']['tmp_name'];
    $error=$_FILES['imagen']['error'];
    $size=$_FILES['imagen']['size'];
    $max_size=1024*1024*1;
    $type=$_FILES['imagen']['type'];
    
    if ($error) {
        $resultado='Ha ocurrido un error';
    }
    else if ($size>$max_size) {
        $resultado='El tamaño supera el maximo permitido 1 MB';
    }
    else if ($type != 'image/jpg' && $type != 'image/png' && $type != 'image/gif') {
        $resultado='Resultados permitidos jpg/png/gif';
    }
    else{
        $ruta = 'files/'.$name;
        move_uploaded_file($tmp_name, $ruta);
        $resultado = "La imagen $name ha sido guardado con exito";
    }    
}
?>
<strong><?php echo $resultado; ?></strong>
<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Subir imagen: <input type="file" name="imagen">
    <input type="hidden" name="formulario">
    <input type="submit" value="Subir">
</form>