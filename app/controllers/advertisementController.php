<?PHP
use coreAppNS\Controller;

class advertisementsController extends Controller{
public $controller;
public $adv_model;


    function __construct(){



        $this->controller=new Controller();
        $cat_model=$this->controller->model_object->create_model('advertisement');
        $id=$_GET['id'];
        $homeItems=array(
            'advertisement'=>$adv_model->getDataWhereOrderProd($id),
            'user'=>$user_model->getname($this->u),

            
        );

        $this->controller->view_object->create_view('advertisement',$homeItems);

    
       }


}



?>