<?php 

class ReservaModel extends Model{

    public function Index(){

        $this->query('select r.*,a.* from reservas r join actividad a on r.actividad=a.IdActividad');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $this->query('select a.*,h.Hora from actividad a join horasact h on a.IdActividad=h.IdActividad');
        $rows = $this->resultSet();

        $this->query('select * from reservas');
        $reservas = $this->resultSet();
        
        if(isset($post)){
        foreach ($reservas as $reserva){
            
            if($reserva['actividad'] == $post['actividad'] && $reserva['fecha'] == $post['fecha'] && $reserva['hora'] == $post['hora']){

                Messages::setMsg('Esa actividad ya ha sido reservada en esa fecha y esa hora. Por favor recarga la pagina para hacer otra reserva', 'error');
                return;
            }

        }

    }

        if(isset($post['submit'])){


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