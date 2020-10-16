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
        //$cat_model2=$this->controller->model_object->create_model('users');
        $homeItems=array(
            'categories'=>$cat_model->getData(),
            //'users'=>$cat_model2->getData()
            //'image'=>$cat_model->getData1(),
            //'products'=>array('Lenovo','Galaxy s10','Dell Inspiron','Toshiba','HTC'),

            //'products'=>$cat_model->getData1(),
        
        );

        $this->controller->view_object->create_view('home',$homeItems);
       // $this->controller->view_object->create_view('home');
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>