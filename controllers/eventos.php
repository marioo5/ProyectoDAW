<?php

class Eventos extends Controller{

    protected function Index(){

        $viewmodel = new EventosModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>