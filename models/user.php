<?php 

class UserModel extends Model{

    public function register(){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['pass']);

        if(isset($post)){

            if($post['submit']){

                if($post['name'] == '' || $post['email'] == '' || $post['pass'] == ''){

                    Messages::setMsg('Please Fill In All Fields', 'error');
                    return;
                }
        
                $this->query('insert into usuarios (name,email,password,rol) values (:name,:email,:pass,:rol)');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':pass', $password);
                $this->bind(':rol', "usuario");
                $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'users/login');

                }
            }

                return;

         }

    }

    public function login(){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['pass']);

        if(isset($post)){

            if($post['submit']){
        
                $this->query('select * from usuarios where email = :email and password = :pass and rol = :rol');
                $this->bind(':email', $post['email']);
                $this->bind(':pass', $password);
                $this->bind(':rol', $this->query('select rol from users where email = :email'));
                
                $row = $this->single();

                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array(
                        "id" => $row['idusuario'],
                        "name" => $row['name'],
                        "email" => $row['email'],
                        "rol" => $row['rol']

                    );
                    header('Location: '.ROOT_URL.'noticias');
                }else {
                    Messages::setMsg('Incorrect Login', 'error');
                }
            }

            return;

         }

    }


}


?>