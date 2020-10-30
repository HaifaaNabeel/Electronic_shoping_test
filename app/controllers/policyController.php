<?PHP
use coreAppNS\Controller;
class policyController extends Controller{
public $controller;



    function __construct(){

        $this->controller=new Controller();
        @session_start();
        if(isset($_SESSION['uid'])){
         $this->u=$_SESSION['uid'];}else{
         $this->u=0;}
         $user_model=$this->controller->model_object->create_model('users');
        $order_model=$this->controller->model_object->create_model('order');
        $compare_product_model=$this->controller->model_object->create_model('compare_product');
        $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
             'cartitem'=>$order_model->getOne($this->u),
             'favoriteitem'=>$favorite_product_model->getOnef($this->u),
             'filteritem'=>$compare_product_model->getOnefilter($this->u)
            
        );

        $this->controller->view_object->create_view('policy',$homeItems);
    
       }


}


?>