<?php

class Producto extends Controller{

    protected function Index(){

        $viewmodel = new ProductoModel();
        $this->returnView($viewmodel->Index(), true);
    
    }


}

?>