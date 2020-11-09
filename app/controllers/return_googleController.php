<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class return_googleController extends Controller{
public $controller;
public $u;
function __construct(){

    $this->controller=new Controller();
    
     @session_start();
    if(isset($_SESSION['uid'])){
     $this->u=$_SESSION['uid'];}else{
     $this->u=0;}
     echo $_GET['name'];
     echo $_GET['email'];
    
      $user_model=$this->controller->model_object->create_model('users');
    $order_model=$this->controller->model_object->create_model('order');
    $compare_product_model=$this->controller->model_object->create_model('compare_product');
    $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
    $cat_model=$this->controller->model_object->create_model('category');
    $user_model->loginhere($page);
     
     //echo '<br><br><br><br><br><br><br>jkhkhkj jhjkh jhjk jh jhj j jhj j jh  jh jhkjh kjh ';
      $x=$_GET['name'];
      $y=$_GET['email'];
     $homeItems=array(
        'categories'=>$cat_model->getDataWhereOrder(),
         'cartitem'=>$order_model->getOne($this->u),
         'favoriteitem'=>$favorite_product_model->getOnef($this->u),
         'filteritem'=>$compare_product_model->getOnefilter($this->u),
          "users"=>$user_model->login_google($x,$y),
          'user'=>$user_model->getname($this->u),


    );

    $this->controller->view_object->create_view('return_google',$homeItems);

   }


}


?>