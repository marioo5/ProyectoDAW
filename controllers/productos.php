<?php

class Producto extends Controller{

    protected function Index(){

        $viewmodel = new ProductoModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'producto');

        }

        $viewmodel = new ProductoModel();
        $this->returnView($viewmodel->add(), true);
    

    }

    protected function upload (){

        $viewmodel = new ProductoModel();
        $viewmodel->upload();
        $this->returnView($viewmodel->add(), true);


    }


}

?>