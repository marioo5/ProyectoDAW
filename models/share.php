<?php 

class ShareModel extends Model{

    public function Index(){

        $this->query('select * from shares order by create_date desc');
        $rows = $this->resultSet();
        return $rows;

    }

    public function add (){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){

            if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){

                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('insert into shares (user_id,title,body,link) values (:userid,:title,:body,:link)');
            $this->bind(':title', $post['title']);
            $this->bind(':userid', 1);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->execute();

            if($this->lastInsertId()){

                header('Location: '.ROOT_URL.'shares');

            }
        }

        return;
    }

}


?>