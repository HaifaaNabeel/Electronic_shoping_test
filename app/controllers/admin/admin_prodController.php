<?PHP
use coreAppNS\Controller;

class admin_prodController extends Controller{
public $controller;
public $prod_model;
public $function;
public $prod_model2;




function __construct($function="index"){

        $this->controller=new Controller();
       $this->prod_model=$this->controller->model_object->create_model('product');
       //$this->prod_model2=$this->controller->model_object->create_model('product');

        $this->$function();
        
}


function index(){
        $items=array(
            'categories_parent'=>$this->prod_model->getDataC(),
            'products'=>$this->prod_model->getDataOrder(),
   
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}


 /////////////////////////////////////product///////////////////////////////



function add_prod()
{
    $items=array(
        'categories_parent'=>$this->prod_model->getDataC(),
           );
    $this->controller->view_object->create_view('admin/prod_add',$items);

}

function add_product(){
    ///////////for upload main image////////
    $imag_path="app/assets/img/products_images/".$_FILES['product_main_image']['name'];
    move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path);
    $_POST['product_main_image']=$imag_path;
    //////////////for upload branch images//////////////
    $imags_path="app/assets/img/products_images/";
    $array_images="";
        foreach($_FILES['product_branch_images']['name'] as $id=>$val)
        {   $fileName        = $_FILES['product_branch_images']['name'][$id];
            $tempLocation    = $_FILES['product_branch_images']['tmp_name'][$id];
            $targetFilePath  = $imags_path . $fileName;
            move_uploaded_file($tempLocation, $targetFilePath);

            $array_images.= $imags_path.$val.",";
        }
        $_POST['product_branch_images']=$array_images;
        //echo $array_images;
        print_r($_POST);
        $this->prod_model->addData($_POST); 

}



function update_prod()
{$id=$_GET['id'];
    $items=array(
        'products'=>$this->prod_model->getOne($id),
        'categories_parent'=>$this->prod_model->getDataC(),
           );
    $this->controller->view_object->create_view('admin/prod_update',$items);
}


function update(){

    ///////////for upload main image////////
    $imag_path="app/assets/img/products_images".$_FILES['product_main_image']['name'];
    if(move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path))
    {
        $final_path=str_replace("../","",$imag_path);
        $_POST['product_main_image']=$final_path;   
    }
    //////////////for upload branch images//////////////
    if(!empty(array_filter($_FILES['product_branch_images']['name'])))
    {
        $imags_path="app/assets/img/products_images/";
        $array_images="";
         foreach($_FILES['product_branch_images']['name'] as $id=>$val)
       {   $fileName        = $_FILES['product_branch_images']['name'][$id];
           $tempLocation    = $_FILES['product_branch_images']['tmp_name'][$id];
           $targetFilePath  = $imags_path . $fileName;
           move_uploaded_file($tempLocation, $targetFilePath);

           $array_images.= $imags_path.$val.",";
        }
       $_POST['product_branch_images']=$array_images;
    }
    print_r($_POST);
     $this->prod_model->updateData($_POST); 


}
function delete_prod()
{
   // $this->controller->view_object->create_view('admin/update_cat');
  $id=$_GET['id'];
  
     $items=array(
          'category_del'=>$this->prod_model->deleteone($id),
           'products'=>$this->prod_model->getDataOrder(),
           );
           //print_r($items);
           $this->controller->view_object->create_view('admin/homeAdmin',$items);

}


}
?>