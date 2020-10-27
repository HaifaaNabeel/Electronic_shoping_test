<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class done_pay_or_notController extends Controller{
public $controller;



    function __construct(){

        $this->controller=new Controller();
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
            
        
        );

        //$this->controller->view_object->create_view('home',$homeItems);
        $this->controller->view_object->create_view('done_pay_or_not',$homeItems);
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>