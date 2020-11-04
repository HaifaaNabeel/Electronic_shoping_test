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
        $items=array(
                'categories'=>$this->cat_model->getDataOrder(),
                'products'=>$this->cat_model->getDataOrderP(),
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}

function categories(){
           $items=array(
         'categories'=>$this->cat_model->getDataOrder(),
         'products'=>$this->cat_model->getDataOrderP(),

     );
        $this->controller->view_object->create_view('admin/categories',$items);
}


function add(){
            print_r($_POST);
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


function delete_cat()
{

   // $this->controller->view_object->create_view('admin/update_cat');
  $id=$_GET['id'];
     $items=array(
          'category_del'=>$this->cat_model->deleteone($id),
           'categories'=>$this->cat_model->getDataOrder(),
           );
    $this->controller->view_object->create_view('admin/categories',$items);

} 
 /////////////////////////////////////product//////////////////////////////////////////////

 function add_prod()
 {
     $items=array(
         'categories_parent'=>$this->cat_model->getData(),
         'products'=>$this->cat_model->getDataOrderP(),

            );
     $this->controller->view_object->create_view('admin/prod_add',$items);
 
 }
 
 function add_product(){
      print_r($_POST);
     $this->cat_model->addDataP($_POST); 
 }

///////////////////////////////////////////search///////////////////
function search_result()
{            print_r($_POST);
              $this->cat_model->searchData($_POST);
}    
function search()
{          
    $this->controller->view_object->create_view('admin/search');
} 
    function search_cat()
{         $id=$_GET['id'];
    $items=array(
         'result_search'=>$this->cat_model->getOne($id),
     );
        
        $this->controller->view_object->create_view('admin/cat_search',$items);
}

}
?>