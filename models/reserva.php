<?php 

class ReservaModel extends Model{

    public function Index(){

        $this->query('select * from actividad');
        $rows = $this->resultSet();
        return $rows;

    }

}


?>