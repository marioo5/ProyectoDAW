<?php

class Horas extends Controller{

    protected function Index(){

        $viewmodel = new HorasModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'reservas');

        }

        $viewmodel = new HorasModel();
        $this->returnView($viewmodel->add(), true);
    

    }

    
}

?>