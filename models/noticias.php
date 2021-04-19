<?php 

class NoticiasModel extends Model{

    public function Index(){

        $this->query('select * from noticia order by fecha desc');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        if(isset($post['submit'])){


            if($post['titulo'] == '' || $post['descripcion'] == '' || $_FILES['foto']['name'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into noticia (titulo,descripcion,foto) values (:titulo,:descripcion,:foto)');
            $this->bind(':titulo', $post['titulo']);
            $this->bind(':descripcion', $post['descripcion']);
            $this->bind(':foto', $_FILES['foto']['name']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'noticias');

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

    public function delete (){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['delete'])){

                $delete_id = $post['delete_id'];
                $this->query('DELETE FROM noticia WHERE IdNoticia = :id');
                $this->bind(':id', $delete_id);
                $this->execute();

                }

        header('Location: '.ROOT_URL.'noticias');
    
            
            
        return;
        

    }

}


?>