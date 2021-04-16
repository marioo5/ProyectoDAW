<?php

class Horas extends Controller{

    protected function Index(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'reservas');

        }

        $viewmodel = new HorasModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    
}

?>