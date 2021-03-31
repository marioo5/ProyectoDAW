<?php

class Noticias extends Controller{

    protected function Index(){

        $viewmodel = new NoticiasModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>