<?php 

class ContactModel extends Model{

    public function Index (){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){


            if($post['nombre'] == '' || $post['email'] == '' || $post['mensaje'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into contacto (nombre,email,mensaje) values (:nombre,:email,:mensaje)');
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':email', $post['email']);
            $this->bind(':mensaje', $post['mensaje']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'contact');

            }
        }

        return;
    }

}


?>