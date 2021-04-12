<?php
$target_path = "../../assets/images/";
$target_path = $target_path . basename( $_FILES['foto']['name']); 
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $_FILES['foto']['name']). 
    " ha sido subido";
} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}

$uploadedfileload="true";
$uploadedfile_size=$_FILES['foto']['size'];
echo $_FILES['foto']['name'];
if ($_FILES['foto']['size']>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES['foto']['type'] =="image/pjpeg" OR $_FILES['foto']['type'] =="image/gif" OR $_FILES['foto']['type'] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES['foto']['name'];
$add="assets/images/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES['foto']['tmp_name'], $add)){
echo "Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}

?>