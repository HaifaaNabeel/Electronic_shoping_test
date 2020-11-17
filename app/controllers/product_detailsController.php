<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class product_detailsController extends Controller{
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
     $cat_model=$this->controller->model_object->create_model('product');
        $compare_product_model=$this->controller->model_object->create_model('compare_product');
        $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
        $id=$_GET['id'];
        $homeItems=array(
             'categories'=>$cat_model->getDataWhereOrder(),
             'products'=>$cat_model->getDataWhereOrderProd_details($id),
             'products_all'=>$cat_model->getAllProducts(),
             'cartitem'=>$order_model->getOne($this->u),
             'favoriteitem'=>$favorite_product_model->getOnef($this->u),
             'filteritem'=>$compare_product_model->getOnefilter($this->u),
             'color'=>$order_model->getcolor($this->u),
             'fcolor'=>$favorite_product_model->getcolor($this->u),
             'ficolor'=>$compare_product_model->getcolor($this->u),
             'user'=>$user_model->getname($this->u),

        );
  


        //$this->controller->view_object->create_view('home',$homeItems);
        $this->controller->view_object->create_view('product_details',$homeItems);
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>