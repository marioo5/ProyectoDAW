<?php

class Enoturismo extends Controller{

    protected function Index(){

        $viewmodel = new EnoturismoModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'enoturismo');

        }

        $viewmodel = new EnoturismoModel();
        $this->returnView($viewmodel->add(), true);
    

    }

    protected function upload (){

        $viewmodel = new EnoturismoModel();
        $viewmodel->upload();
        $this->returnView($viewmodel->add(), true);


    }


}

?>