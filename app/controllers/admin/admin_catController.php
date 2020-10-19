<?PHP
use coreAppNS\Controller;

class admin_catController extends Controller{
public $controller;
public $cat_model;
public $function;



function __construct($function="index"){

        $this->controller=new Controller();
       $this->cat_model=$this->controller->model_object->create_model('category');
        $this->$function();
        
}


function index(){
      //  $items=array(
       //     'categories'=>$this->cat_model->getDataOrder(),
            
       // );
        
        $this->controller->view_object->create_view('admin/homeAdmin');
}

function categories(){
           $items=array(
         'categories'=>$this->cat_model->getDataOrder(),
            
     );
        
        $this->controller->view_object->create_view('admin/categories',$items);
}


function add(){
           // print_r($_POST);
           $this->cat_model->addData($_POST); 
}

function add_cat()
{
     $items=array(
        'categories_parent'=>$this->cat_model->getData(),
           );
    $this->controller->view_object->create_view('admin/cat_add',$items);

}


function update_cat()
{$id=$_GET['id'];
    $items=array(
        'categories'=>$this->cat_model->getOne($id),
        'categories_parent'=>$this->cat_model->getData(),
           );
    $this->controller->view_object->create_view('admin/cat_update',$items);
}


function update(){
        //    print_r($_POST);
           $this->cat_model->updateData($_POST); 
}


    function delete_cat(){

   // $this->controller->view_object->create_view('admin/update_cat');
$id=$_GET['id'];
    $items=array(
        'category_del'=>$this->cat_model->deleteone($id),
         'categories'=>$this->cat_model->getDataOrder(),
           );
    $this->controller->view_object->create_view('admin/categories',$items);

} 

}


?>