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
        
                $this->query('insert into users (name,email,password) values (:name,:email,:pass)');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':pass', $password);
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
        
                $this->query('select * from users where email = :email and password = :pass');
                $this->bind(':email', $post['email']);
                $this->bind(':pass', $password);
                
                $row = $this->single();

                if($row){
                    $_SESSION['is_logged_in'] = true;
                    $_SESSION['user_data'] = array(
                        "id" => $row['id'],
                        "name" => $row['name'],
                        "email" => $row['email']

                    );
                    header('Location: '.ROOT_URL.'shares');
                }else {
                    Messages::setMsg('Incorrect Login', 'error');
                }
            }

            return;

         }

    }


}


?>