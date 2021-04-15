<?php 

class ReservaModel extends Model{

    public function Index(){

        $this->query('select * from actividad');
        $this->query('select * from horasact');
        $rows = $this->resultSet();
        return $rows;

    }

}


?>