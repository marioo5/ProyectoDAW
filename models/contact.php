<?php 

class ContactModel extends Model{

    public function Index (){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){


            if($post['nombre'] == '' || $post['email'] == '' || $post['mensaje'] == ''){

                Messages::setMsg('Por favor rellena todos los campos', 'error');
                return;
            }

            $this->query('insert into contacto (nombre,email,mensaje) values (:nombre,:email,:mensaje)');
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':email', $post['email']);
            $this->bind(':mensaje', $post['mensaje']);
            $this->execute();

            if($this->lastInsertId()){
                
                Messages::setMsg('Se ha enviado correctamente', 'succes');
                /*header('Location: '.ROOT_URL.'contact');*/
                

            }
        }

        return;
    }

}


?>