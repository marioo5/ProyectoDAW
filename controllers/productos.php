<?php

class Producto extends Controller{

    protected function Index(){

        $viewmodel = new ProductoModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin'){

            header('Location: '.ROOT_URL.'producto');

        }

        $viewmodel = new ProductoModel();
        $this->returnView($viewmodel->add(), true);
    

    }


}

?>