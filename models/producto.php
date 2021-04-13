<?php 

class ProductoModel extends Model{

    public function Index(){

        return;

    }

    public function add (){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){

            if($post['titulo'] == '' || $post['descripcion'] == '' || $post['foto'] == '' || $post['tipo']){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into producto (titulo,descripcion,foto,tipo) values (:titulo,:descripcion,:foto,:tipo)');
            $this->bind(':titulo', $post['titulo']);
            $this->bind(':descripcion', $post['descripcion']);
            $this->bind(':foto', $post['foto']);
            $this->bind(':tipo', $post['tipo']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'producto');

            }
        }

        return;
    }

}


?>