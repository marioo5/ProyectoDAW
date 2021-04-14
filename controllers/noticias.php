<?php

class Noticias extends Controller{

    protected function Index(){

        $viewmodel = new NoticiasModel();
        $this->returnView($viewmodel->Index(), true);
    
    }

    protected function add(){

        if(!isset($_SESSION['is_logged_in'])){

            header('Location: '.ROOT_URL.'noticias');

        }

        $viewmodel = new NoticiasModel();
        $this->returnView($viewmodel->add(), true);
    

    }

    protected function upload (){

        $viewmodel = new NoticiasModel();
        $viewmodel->upload();
        $this->returnView($viewmodel->add(), true);


    }

    protected function delete (){

        $viewmodel = new NoticiasModel();
        $this->returnView($viewmodel->delete(), true);

    }


}

?>