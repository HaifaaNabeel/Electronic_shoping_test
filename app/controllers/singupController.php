<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class singupController extends Controller{
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
         $user_model->signup(); 
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
            'products'=>$cat_model->getDataWhereOrderProd(),
            'cartitem'=>$order_model->getOne($this->u)
        );

        //$this->controller->view_object->create_view('home',$homeItems);
        $this->controller->view_object->create_view('singup',$homeItems);
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>