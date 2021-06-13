<?php
class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares');

        return $rows = $this->resultSet();
    }
    public function create(){
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
        $this->query('INSERT INTO shares (title,body,link,user_id) VALUES (:title,:body,:link,:user_id)');
        $this->bind(':title',$post['title']);
        $this->bind(':body',$post['body']);
        $this->bind(':link',$post['link']);
        $this->bind(':user_id',1);
        $this->execute();
        if ($this->lastInsertId()){
            header('Location: '.ROOT_URL.'/shares');
        }

        }
        return;
    }
}