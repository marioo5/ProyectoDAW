<?php

class Reserva extends Controller{

    protected function Index(){
        
        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'reservas');

        }

        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->add(), true);
    

    }


}

?>