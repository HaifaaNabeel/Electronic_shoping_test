<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class homeController extends Controller{
public $controller;
public $cat_model;
//public $cat_model2;



function __construct(){
    $this->controller=new Controller();
     @session_start();
    if(isset($_SESSION['uid'])){
     $this->u=$_SESSION['uid'];}else{
     $this->u=0;}
     $user_model=$this->controller->model_object->create_model('users');
     $order_model=$this->controller->model_object->create_model('order');
     $cat_model=$this->controller->model_object->create_model('category');
     $compare_product_model=$this->controller->model_object->create_model('compare_product');
     $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
     $advertisement_model=$this->controller->model_object->create_model('advertisement');
     $banner_model=$this->controller->model_object->create_model('banner');
     $homeItems=array(
         'products'=>$cat_model->getDataWhereOrderProd(),
         'categories'=>$cat_model->getDataWhereOrder(),
         'cartitem'=>$order_model->getOne($this->u),
         'favoriteitem'=>$favorite_product_model->getOnef($this->u),
         'filteritem'=>$compare_product_model->getOnefilter($this->u),
        'advertisement1'=>$advertisement_model->selecADS1(),
        'advertisement'=>$advertisement_model->selecADS(),
        'banner'=>$banner_model->getDataOrder(),
         'user'=>$user_model->getname($this->u),
    );

    $this->controller->view_object->create_view('home',$homeItems);
   // $this->controller->view_object->create_view('home');

   }


}


?>