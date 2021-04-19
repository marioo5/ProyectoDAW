<?php 

class ReservaModel extends Model{

    public function Index(){

        $this->query('select * from actividad');
        $this->query('select * from horasact');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){
        
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){


            if($post['actividad'] == '' || $post['hora'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into horasact (IdActividad,hora) values (:actividad,:hora)');
            $this->bind(':actividad', $post['actividad']);
            $this->bind(':hora', $post['hora']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'reserva');

            }
        }

        return;
    }

}


?>