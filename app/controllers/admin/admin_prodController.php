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
            'products'=>$this->prod_model->getDataWhereOrderProd_just(),
   
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
    $allowedFileType = array('jpg','png','jpeg'); 
    $done_upload=0;$done_upload1=0;

    ///////////for upload main image////////
    $imag_path="app/assets/img/products_images/".$_FILES['product_main_image']['name'];
    $fileType= strtolower(pathinfo($imag_path, PATHINFO_EXTENSION));
    
    
    if(in_array($fileType, $allowedFileType))  ///////////for upload main image////////
    {
       move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path);
    $_POST['product_main_image']=$imag_path;
    $done_upload=1;
}

    //////////////for upload branch images//////////////
    $imags_path="app/assets/img/products_images/";
    $array_images="";
        foreach($_FILES['product_branch_images']['name'] as $id=>$val)
        {   $fileName        = $_FILES['product_branch_images']['name'][$id];
            $tempLocation    = $_FILES['product_branch_images']['tmp_name'][$id];
            $targetFilePath  = $imags_path . $fileName;
            $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
            if(in_array($fileType, $allowedFileType))
            {
               move_uploaded_file($tempLocation, $targetFilePath);
                $array_images.= $imags_path.$val.",";
                $done_upload1=1;

              }
        }
        $_POST['product_branch_images']=$array_images;
        //echo $array_images;
        //print_r($_POST);

        if($done_upload == 1  && $done_upload1 == 1 && $_POST['product_name'] !='' && $_POST['product_english_name'] !='' && $_POST['product_price'] !='' && $_POST['product_Quantity'] !=''  && $_POST['product_details'] != ""){
        $this->prod_model->addData($_POST); 
            }
            else 
            { echo "<script>
                alert('insert true data and choose just file image  ')</script>";
                echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/add_prod" />';
                 
            }
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
    $allowedFileType = array('jpg','png','jpeg'); 
    $done_upload=0;$done_upload1=0;
    ///////////for upload main image////////
    $imag_path="app/assets/img/products_images".$_FILES['product_main_image']['name'];
    $fileType= strtolower(pathinfo($imag_path, PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES['product_main_image']['tmp_name'],$imag_path))
    {  if(in_array($fileType, $allowedFileType))
        {
        $final_path=str_replace("../","",$imag_path);
        $_POST['product_main_image']=$final_path;
        $done_upload=1; 
       } 
       else{$done_upload=2;}  
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
           $fileType= strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
           if(in_array($fileType, $allowedFileType))
            {  if(move_uploaded_file($tempLocation, $targetFilePath))
               { $array_images.= $imags_path.$val.",";
                  $done_upload1=1; 
               }
           }
           else{$done_upload1=2;}
        }
       $_POST['product_branch_images']=$array_images;
    }
    //print_r($_POST);
     
    //if($done_upload==1 || $done_upload==0){echo "upload;;";}
    if(($done_upload==1 || $done_upload==0) && ($done_upload1 ==1 || $done_upload1 == 0))
    {
        //echo"upload";//
        $this->prod_model->updateData($_POST);
    }
    
    else{echo"<script>
        alert('update true data and choose just file image ')</script>";
        echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/index" />';

        
        }
    //$this->prod_model->updateData($_POST); 


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