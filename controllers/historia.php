<?php

class Historia extends Controller{

    protected function Index(){

        $viewmodel = new HistoriaModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>