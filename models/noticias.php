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

        return;
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