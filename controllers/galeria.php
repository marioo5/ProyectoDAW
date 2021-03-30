<?php

class Galeria extends Controller{

    protected function Index(){

        $viewmodel = new GalleriaModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>