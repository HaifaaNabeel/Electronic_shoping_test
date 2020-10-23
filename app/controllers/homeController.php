<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class homeController extends Controller{
public $controller;
public $cat_model;
//public $cat_model2;



    function __construct(){

        $this->controller=new Controller();
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
            'products'=>$cat_model->getDataWhereOrderProd(),
        
        );

        $this->controller->view_object->create_view('home',$homeItems);
       // $this->controller->view_object->create_view('home');
    
       }


}


?>