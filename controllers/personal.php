<?php

class Personal extends Controller{

    protected function Index(){

        $viewmodel = new PersonalModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>