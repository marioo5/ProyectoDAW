<?php

class Enoturismo extends Controller{

    protected function Index(){

        $viewmodel = new EnoturismoModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>