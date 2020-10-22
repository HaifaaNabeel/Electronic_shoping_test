<?PHP
use coreAppNS\Controller;

class admin_prodController extends Controller{
public $controller;
public $cat_model;
public $function;
public $cat_model2;




function __construct($function="index"){

        $this->controller=new Controller();
       $this->cat_model=$this->controller->model_object->create_model('product');
       //$this->cat_model2=$this->controller->model_object->create_model('product');

        $this->$function();
        
}


function index(){
        $items=array(
            'categories_parent'=>$this->cat_model->getDataC(),
            'products'=>$this->cat_model->getDataOrder(),
   
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}

/*
function categories(){
           $items=array(
         'products'=>$this->cat_model->getDataOrder(),
            
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

} */
 /////////////////////////////////////product///////////////////////////////



function add_prod()
{
    $items=array(
        'categories_parent'=>$this->cat_model->getDataC(),
           );
    $this->controller->view_object->create_view('admin/prod_add',$items);

}

function add_product(){
    print_r($_POST);
    //$this->cat_model->addData($_POST); 
    $imag_path="app/assets/img/".$_FILES['product_main_image']['name'];
    if(move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path))
    {  
        //echo"YESsssssssssssssssssssssssssss";
        $final_path=str_replace("../","",$imag_path);
        $_POST['product_main_image']=$final_path;
        $this->cat_model->addData($_POST); 
         
    }
    else
    {
        echo"NOooooooooooooooooooooooooooooooo";

    }
}


function update_prod()
{$id=$_GET['id'];
    $items=array(
        'products'=>$this->cat_model->getOne($id),
        'categories_parent'=>$this->cat_model->getDataC(),
           );
    $this->controller->view_object->create_view('admin/prod_update',$items);
}


function update(){

    /*$imag_path="app/assets/img/".$_FILES['product_main_image']['name'];
    move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path);
    $final_path=str_replace("../","",$imag_path);
    $_POST['product_main_image']=$final_path;
    $this->cat_model->updateData($_POST); 
    */


    //    print_r($_POST);
    //$this->cat_model->updateData($_POST); 
    $imag_path="app/assets/img/".$_FILES['product_main_image']['name'];
    if(move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path))
    {  
        //echo"YESsssssssssssssssssssssssssss";
        $final_path=str_replace("../","",$imag_path);
        $_POST['product_main_image']=$final_path;
        $this->cat_model->updateData($_POST); 
    }
    else
    {
        //echo"NOooooooooooooooooooooooooooooooo";
        $this->cat_model->updateData($_POST); 

    }


}


function delete_prod()
{
   // $this->controller->view_object->create_view('admin/update_cat');
  $id=$_GET['id'];
  
     $items=array(
          'category_del'=>$this->cat_model->deleteone($id),
           'products'=>$this->cat_model->getDataOrder(),
           );
           //print_r($items);
           $this->controller->view_object->create_view('admin/homeAdmin',$items);

}


}
?>