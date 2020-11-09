<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class bill_saleController extends Controller{
public $controller;



    function __construct(){
        $this->controller=new Controller();
        @session_start();
        if(isset($_SESSION['uid'])){
         $this->u=$_SESSION['uid'];}else{
         $this->u=0;}
        $userid=$_GET['id'];
        $bill=$_GET['bill'];
        $user_model=$this->controller->model_object->create_model('users');
        $order_model=$this->controller->model_object->create_model('order');
        $compare_product_model=$this->controller->model_object->create_model('compare_product');
        $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
        $cat_model=$this->controller->model_object->create_model('category');
        $checkout_model=$this->controller->model_object->create_model('bill_sale');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
             'cartitem'=>$order_model->getOne($this->u),
             'favoriteitem'=>$favorite_product_model->getOnef($this->u),
             'filteritem'=>$compare_product_model->getOnefilter($this->u),
             'uuser'=>$user_model->getOne($userid),
              'checkout'=>$checkout_model->fetchbill($userid,$bill),
              'checkout1'=>$checkout_model->checkout1($userid,$bill),
              'user'=>$user_model->getname($this->u),


        );

        $this->controller->view_object->create_view('bill_sale',$homeItems);    
       }


}


?>