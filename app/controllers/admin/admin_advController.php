<?PHP
use coreAppNS\Controller;

class admin_advController extends Controller{
public $controller;
public $adv_model;
public $function;
//public $prod_model2;




function __construct($function="index"){

        $this->controller=new Controller();
       $this->adv_model=$this->controller->model_object->create_model('advertisement');
       

        $this->$function();
        
}


function index(){
        $items=array(
            
            'advertisements'=>$this->adv_model->getDataOrder(),
   
        );
        
        $this->controller->view_object->create_view('admin/advertisement',$items);
}


 
function advertisements(){
    $items=array(
  'advertisements'=>$this->adv_model->getDataOrder(),
  

     
);
 
 $this->controller->view_object->create_view('admin/advertisements',$items);
}


// function add_adver()
// {
//     $items=array(
//         'adds_id'=>$this->adv_model->getDataC(),
//            );
//     $this->controller->view_object->create_view('admin/adv_adver',$items);

// }



function add_adv()
{
    $items=array(
        'advertisements'=>$this->adv_model->getDataC(),
           );
    $this->controller->view_object->create_view('admin/adv_add',$items);

}
function add_advertisement(){
    $allowedFileType = array('jpg','png','jpeg'); 
    $done_upload=0;$done_upload1=0;

    ///////////for upload main image////////
    $imag_path="app/assets/img/adv_images/".$_FILES['adds_img']['name'];
    $fileType= strtolower(pathinfo($imag_path, PATHINFO_EXTENSION));
    
    
    if(in_array($fileType, $allowedFileType))  ///////////for upload main image////////
    {
    move_uploaded_file($_FILES['adds_img']['tmp_name'],$imag_path);
    $_POST['adds_img']=$imag_path;
    print_r($_POST);
    $this->adv_model->addData($_POST); 
    $done_upload=1;
}
if($done_upload == 1  && $_POST['adds_name'] !='' && $_POST['adds_img'] !='' && $_POST['data'] !=""){
    $this->adv_model->addData($_POST); 
        }
        else 
        { echo "<script>
            alert('insert true data and choose just file image  ')</script>";
            echo '<meta http-equiv = "refresh" content = "1.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/add_adv" />';
             
        }
}
// function add_adv(){
//     ///////////for upload main image////////
//     $imag_path="app/assets/img/adv_images/".$_FILES['adds_img']['name'];
//     move_uploaded_file($_FILES['adds_img']['tmp_name'],$imag_path);
//     $_POST['adds_img']=$imag_path;
  
//         print_r($_POST);
//         $this->adv_model->addData($_POST); 

// }
function add(){
    $allowedFileType = array('jpg','png','jpeg');
    ///////////for upload main image////////
    $imag_path="app/assets/img/adv_images".$_FILES['adds_img']['name'];
    $fileType= strtolower(pathinfo($imag_path, PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES['adds_img']['tmp_name'],$imag_path))
    {  if(in_array($fileType, $allowedFileType))
        {
        $final_path=str_replace("../","",$imag_path);
        $_POST['adds_img']=$final_path;
    
    
        $this->adv_model->addData($_POST); 
       } 
       else echo"<script>
       alert('update true data and choose just file image ')</script>";  
    }
    
       
    
  

    // if( $_POST['adds_name'] !='' && $_POST['adds_img'] !='' && $_POST['date'] !='' && $_POST['place_in_home'] != ""){
    //     $this->adv_model->addData($_POST);
    // print_r($_POST);
    // }
}

function update_adv()
{$id=$_GET['id'];
    $items=array(
        'advertisements'=>$this->adv_model->getOne($id),
        
           );
    $this->controller->view_object->create_view('admin/adv_update',$items);
}


function update(){
    $allowedFileType = array('jpg','png','jpeg');
    ///////////for upload main image////////
    $imag_path="app/assets/img/adv_images".$_FILES['adds_img']['name'];
    $fileType= strtolower(pathinfo($imag_path, PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES['adds_img']['tmp_name'],$imag_path))
    {  if(in_array($fileType, $allowedFileType))
        {
        $final_path=str_replace("../","",$imag_path);
        $_POST['adds_img']=$final_path;
    
    
        $this->adv_model->updateData($_POST); 
       } 
       else echo"<script>
       alert('update true data and choose just file image ')</script>";  
    }
    
       
    
    print_r($_POST);
    $this->adv_model->updateData($_POST); 
}


// function update_adv()
// {$id=$_GET['id'];
//     $items=array(
//         'advertisements'=>$this->adv_model->getOne($id),
        
//            );
//     $this->controller->view_object->create_view('admin/adv_updata',$items);
// }


// function update(){


//     $imag_path="app/assets/img/adv_images".$_FILES['adds_img']['name'];
//     if(move_uploaded_file($_FILES['adds_img']['tmp_name'],$imag_path))
//     {
//         $final_path=str_replace("../","",$imag_path);
//         $_POST['adds_img']=$final_path;   
//     }
    
//     print_r($_POST);
//      $this->adv_model->updateData($_POST); 


// }
function delete_adv()
{
   
  $id=$_GET['id'];
  
     $items=array(
          'advertisement_del'=>$this->adv_model->deleteone($id),
          
           );
           
           $this->controller->view_object->create_view('admin/advertisement',$items);

}


}
?>