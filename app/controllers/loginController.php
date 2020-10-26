<?PHP
use coreAppNS\Controller;
class loginController extends Controller{
public $controller;



    function __construct(){

        $this->controller=new Controller();
        
        $user_model=$this->controller->model_object->create_model('users');
                $user_model->loginhere(); 
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
        
        );

        $this->controller->view_object->create_view('login',$homeItems);
    
       }


}


?>