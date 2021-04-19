<?php 

class ReservaModel extends Model{

    public function Index(){

        $this->query('select r.*,a.* from reservas r join actividad a on r.actividad=a.IdActividad');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){

        $this->query('select a.*,h.* from actividad a join horasact h on a.IdActividad=h.IdActividad');
        $rows = $this->resultSet();
        
        
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){


            if($post['actividad'] == '' || $post['personas'] == '' || $post['fecha'] == '' || $post['hora'] == '' || $post['nombre'] == '' || $post['email'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into reservas (actividad,numpersonas,fecha,hora,nomusuario,emailusu) values (:actividad,:personas,:fecha,:hora,:nombre,:email)');
            $this->bind(':actividad', $post['actividad']);
            $this->bind(':personas', $post['personas']);
            $this->bind(':fecha', $post['fecha']);
            $this->bind(':hora', $post['hora']);
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':email', $post['email']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'reserva');

            }
        }

        return $rows;
    }

    public function delete (){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['delete'])){

                $delete_id = $post['delete_id'];
                $this->query('DELETE FROM reservas WHERE IdReserva = :id');
                $this->bind(':id', $delete_id);
                $this->execute();

                }

        header('Location: '.ROOT_URL.'reserva');
    
            
            
        return;
        

    }

}


?>