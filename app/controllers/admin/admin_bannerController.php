<?PHP
use coreAppNS\Controller;

class admin_bannerController extends Controller{
public $controller;
public $cat_model;
public $function;
public $user_model;




function __construct($function="banner"){
        @session_start();
        if(isset($_SESSION['uid'])){
         $this->u=$_SESSION['uid'];}else{
         $this->u=0;}
        $this->controller=new Controller();
       $this->banner_model=$this->controller->model_object->create_model('banner');
         $this->user_model=$this->controller->model_object->create_model('users');
        $this->$function();
        }


function banner(){
        $items=array(
                'banner'=>$this->banner_model->getDataOrder(),
                'user'=>$this->user_model->getOne($_SESSION['id']),
        );
        
        $this->controller->view_object->create_view('admin/banner',$items);
}
    function add_bann(){
           $this->banner_model->addData($_POST); 
}

function add()
{
     $items=array(
        'user'=>$this->user_model->getOne($_SESSION['id']),

           );
    $this->controller->view_object->create_view('admin/banner_add',$items);

}

    function delete_banner()
{
  $id=$_GET['id'];
     $items=array(
          'banner_del'=>$this->banner_model->deleteone($id),
                'banner'=>$this->banner_model->getDataOrder(),
                'user'=>$this->user_model->getOne($_SESSION['id']),
           );
        $this->controller->view_object->create_view('admin/banner',$items);

} 
    function update_banner(){
      $id=$_GET['id'];
        $items=array(
                'user'=>$this->user_model->getOne($_SESSION['id']),
                'banner'=>$this->banner_model->getOnee($id),
           );
        $this->controller->view_object->create_view('admin/banner_update',$items);
    }
       function update_bann(){
           $this->banner_model->updateData($_POST); 
}
}
?>