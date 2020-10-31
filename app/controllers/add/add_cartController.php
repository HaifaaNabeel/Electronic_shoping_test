<?PHP
use coreAppNS\Controller;

class add_cartController extends Controller{
public $controller;
    public $order_model;
public $function;
public $uid;
public $favorite_product_model;
public $compare_product_model;
    function __construct($function="index"){
        $this->controller=new Controller();
        $this->order_model=$this->controller->model_object->create_model('order');
       $this->compare_product_model=$this->controller->model_object->create_model('compare_product');
       $this->favorite_product_model=$this->controller->model_object->create_model('favorite_product');
         $this->$function();
        
    }


       function index(){
                   $this->controller->view_object->create_view('add/addcart');
       }
    function addtocart(){
       print_r($_POST);
             $this->order_model->add_to_cart($_POST);    
        }
     function deletefromcart(){
        print_r($_POST);
             $this->order_model->delete_from_cart($_POST);

    
    }
      function addtofavorite(){
        print_r($_POST);
             $this->favorite_product_model->add_to_favorite($_POST);    
        }
     function deletefromfavorite(){
       // print_r($_POST);
             $this->favorite_product_model->delete_from_favorite($_POST);

    
    }
    function addtofilter(){
        print_r($_POST);
             $this->compare_product_model->add_to_compare($_POST);    
        }
     function deletefromfilter(){
       // print_r($_POST);
             $this->compare_product_model->delete_from_compare($_POST);

    
    }
      
}


?>