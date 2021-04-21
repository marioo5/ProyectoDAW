<?php 

class EnoturismoModel extends Model{

    public function Index(){

        $this->query('select * from actividad order by tipo desc');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        if(isset($post['submit'])){


            if($post['titulo'] == '' || $post['descripcion'] == '' || $_FILES['foto']['name'] == '' || $post['tipo'] == '' || $post['precio'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into actividad (titulo,descripcion,foto,tipo,precio) values (:titulo,:descripcion,:foto,:tipo,:precio)');
            $this->bind(':titulo', $post['titulo']);
            $this->bind(':descripcion', $post['descripcion']);
            $this->bind(':foto', $_FILES['foto']['name']);
            $this->bind(':tipo', $post['tipo']);
            $this->bind(':precio', $post['precio']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'enoturismo');

            }
        }

        return;
    }

    public function upload (){

        if (isset($_POST['submit'])) {
            //Recogemos el archivo enviado por el formulario
            $archivo = $_FILES['foto']['name'];
            //Si el archivo contiene algo y es diferente de vacio
            if (isset($archivo) && $archivo != "") {
               //Obtenemos algunos datos necesarios sobre el archivo
               $tipo = $_FILES['foto']['type'];
               $tamano = $_FILES['foto']['size'];
               $temp = $_FILES['foto']['tmp_name'];
         
               //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
              if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                 echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                 - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
              }
              else {
                 //Si la imagen es correcta en tamaño y tipo
                 //Se intenta subir al servidor
                 if (move_uploaded_file($temp, 'assets/images/'.$archivo)) {
                     //Mostramos el mensaje de que se ha subido co éxito
                     echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                     
                 }
                 else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                 }
               }
            }
         }
    }


    public function update(){

            $id = $_GET['id'];

            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
    
                if(isset($post['submit'])){

                    $this->query('update actividad set titulo=:titulo,descripcion=:descripcion,foto=:foto,tipo=:tipo,precio=:precio where IdActividad=:id');
                    $this->bind(':id', $id);
                    $this->bind(':titulo', $post['titulo']);
                    $this->bind(':descripcion', $post['descripcion']);
                    $this->bind(':foto', $_FILES['foto']['name']);
                    $this->bind(':tipo', $post['tipo']);
                    $this->bind(':precio', $post['precio']);
                    $this->execute();
                        
                    header('Location: '.ROOT_URL.'enoturismo');
    
                }else{

                    $this->query('select * from actividad where IdActividad=:id');
                    $this->bind(':id', $_GET['id']);
                    $rows = $this->single();
                    return $rows;     
                
                }

        }

}


?>