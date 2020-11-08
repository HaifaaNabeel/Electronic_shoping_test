<?PHP
use coreAppNS\Controller;

class admin_reportController extends Controller{
public $controller;
public $adv_model;
public $function;
//public $prod_model2;




function __construct($function="index"){
    @session_start();
    if(isset($_SESSION['uid'])){
     $this->u=$_SESSION['uid'];}else{
     $this->u=0;}
        $this->controller=new Controller();
       $this->user_model=$this->controller->model_object->create_model('users');
       $this->order_model=$this->controller->model_object->create_model('order');
       $this->checkout_model=$this->controller->model_object->create_model('checkout');
       $this->prod_model=$this->controller->model_object->create_model('product');



        $this->$function();
        
}


function index(){
        $items=array(
            
            'user'=>$this->user_model->getOne($_SESSION['id']),
            'users'=>$this->user_model->getUsers(),
            'orders'=>$this->order_model->getOrders(),
            'bills'=>$this->checkout_model->getBills(),
            'products'=>$this->prod_model->getAllProducts(),


   
        );
        
        $this->controller->view_object->create_view('admin/reports',$items);
}


 







}
?>