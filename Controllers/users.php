<?php
class Users extends Controller{
    protected function register(){
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->register(),true);
    }
    protected function login(){
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->login(),true);
    }
    protected function logout(){
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->logout(),true);
    }
}