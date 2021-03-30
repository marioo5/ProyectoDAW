<?php

class Reserva extends Controller{

    protected function Index(){

        $viewmodel = new ReservaModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>