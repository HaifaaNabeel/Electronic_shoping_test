<?PHP
use coreAppNS\Controller;

class add_cartController extends Controller{
public $controller;
    public $order_model;
public $function;
public $uid;

    function __construct($function="index"){
        $this->controller=new Controller();
       /* @session_start();
                  $this->uid=$_SESSION['uid'];
        echo $_SESSION['uid'];*/
        $this->order_model=$this->controller->model_object->create_model('order');
        $this->$function();
        
    }


       function index(){
                   $this->controller->view_object->create_view('add/addcart');
       }
    function addtocart(){
       // print_r($_POST);
             $this->order_model->add_to_cart($_POST);    
        }
     function deletefromcart(){
       // print_r($_POST);
             $this->order_model->delete_from_cart($_POST);

    
    }
      function getcount(){
    //  echo $this->order_model->getOne($this->uid);
    }
}


?>