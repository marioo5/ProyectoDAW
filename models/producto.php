<?php 

class ProductoModel extends Model{

    public function Index(){

        $this->query('select * from producto order by tipo desc');
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
            
            $this->query('insert into producto (titulo,descripcion,foto,tipo,precio) values (:titulo,:descripcion,:foto,:tipo,:precio)');
            $this->bind(':titulo', $post['titulo']);
            $this->bind(':descripcion', $post['descripcion']);
            $this->bind(':foto', $_FILES['foto']['name']);
            $this->bind(':tipo', $post['tipo']);
            $this->bind(':precio', $post['precio']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'producto');

            }
        }

        return;
    }

    public function upload (){

        return;
    }

}


?>