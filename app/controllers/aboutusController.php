<?PHP
use coreAppNS\Controller;
class aboutusController extends Controller{
public $controller;



    function __construct(){

        $this->controller=new Controller();
        @session_start();
        if(isset($_SESSION['uid'])){
         $this->u=$_SESSION['uid'];}else{
         $this->u=0;}
         $user_model=$this->controller->model_object->create_model('users');
        $order_model=$this->controller->model_object->create_model('order');
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
            'products'=>$cat_model->getDataWhereOrderProd(),
            'cartitem'=>$order_model->getOne($this->u)
        );

        $this->controller->view_object->create_view('aboutus',$homeItems);
    
       }


}


?>