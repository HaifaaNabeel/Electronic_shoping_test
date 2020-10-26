<?PHP
use coreAppNS\Controller;
class singupController extends Controller{
public $controller;
    function __construct(){

        $this->controller=new Controller();
        $user_model=$this->controller->model_object->create_model('users');
        $user_model->signup(); 
        $this->controller->view_object->create_view('signup');
    
       }


}


?>