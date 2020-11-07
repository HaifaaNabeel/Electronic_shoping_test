<?PHP
use coreAppNS\Controller;

class admin_sessController extends Controller{
public $controller;
public $cat_model;
public $function;

    function __construct($function="index"){

        $this->controller=new Controller();
       $this->cat_model=$this->controller->model_object->create_model('session');
        $this->$function();
        
    }


       function index(){
        
        $this->controller->view_object->create_view('admin/session');
       }
      function check_admin_how(){
         $idh=$_GET['id']; 
      if(isset($idh)){
     $this->cat_model->getsession($idh);    
 $this->controller->view_object->create_view('admin/session');

      }
       }
    function end_sess(){
     $this->cat_model->end_session();    
 $this->controller->view_object->create_view('../../logout');
       }
 

}


?>