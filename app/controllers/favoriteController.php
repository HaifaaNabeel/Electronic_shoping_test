<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class favoriteController extends Controller{
public $controller;



    function __construct(){

        $this->controller=new Controller();
        $cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
            //'image'=>$cat_model->getData1(),
            //'products'=>array('Lenovo','Galaxy s10','Dell Inspiron','Toshiba','HTC'),

            //'products'=>$cat_model->getData1(),
        
        );

        //$this->controller->view_object->create_view('home',$homeItems);
        $this->controller->view_object->create_view('favorite',$homeItems);
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>