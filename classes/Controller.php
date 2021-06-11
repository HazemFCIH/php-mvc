<?php
abstract class Controller{
 protected $request;
 protected $action;
 public function __construct($action,$request)
 {
     $this->action =$action;
     $this->request =$request;

 }
 public function executeAction(){
     return $this->{$this->action}();
 }
 protected function returnView($viewmodel , $fullview){
     $View = 'Views/'.get_class($this).'/'.$this->action.'.php';
     if($fullview){
         require ('Views/main.php');
     }else{
         require($View);
     }
 }
}