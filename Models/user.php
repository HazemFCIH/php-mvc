<?php
class UserModel extends Model
{
    public function register()
    {
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            if($post['name'] == '' ||$post['email'] == '' || $post['password'] == ''){
                Messages::setMsg('Please Fill In All fields','error');
                return;
            }
            $password = md5($post['password']);
            $this->query('INSERT INTO users (name,email,password) VALUES (:name,:email,:password)');
            $this->bind(':name',$post['name']);
            $this->bind(':email',$post['email']);
            $this->bind(':password',$password);
            $this->execute();
            if ($this->lastInsertId()){
                header('Location: '.ROOT_URL.'/users/login');
            }

        }
        return;
    }
    public function login(){
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
            $password = md5($post['password']);
            $this->query('SELECT * FROM users WHERE email = :email AND  password = :password');
            $this->bind(':email',$post['email']);
            $this->bind(':password',$password);
            $row = $this->single();
           if(isset($row['name'])){
               $_SESSION['is_logged_in'] = true;
               $_SESSION['user_data'] = $row;


               header('Location: '.ROOT_URL.'/shares');

           }else{
               Messages::setMsg('The User Name or Password is wrong','error');
//               header('Location: '.ROOT_URL.'/users/login');
           }

        }
        return;
    }
    public function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: '.ROOT_URL.'/users/login');

    }
}