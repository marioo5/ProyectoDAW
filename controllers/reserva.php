<?php

class Reserva extends Controller{

    protected function Index(){
        
        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'reserva');

        }

        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->add(), true);
    

    }

    protected function delete (){

        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->delete(), true);

    }


}

?>