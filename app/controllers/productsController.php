<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class productsController extends Controller{
public $controller;



    function __construct(){

        //$prod_model=$this->controller->model_object->create_model('product');

        $this->controller=new Controller();
        $cat_model=$this->controller->model_object->create_model('product');
        $id=$_GET['id'];
        $homeItems=array(
            'products'=>$cat_model->getDataWhereOrderProd($id),
            'categories'=>$cat_model->getDataWhereOrder(),
        );
//print_r($homeItems);
        //$this->controller->view_object->create_view('products',$homeItems);
        $this->controller->view_object->create_view('products',$homeItems);

    
       }


}


?>