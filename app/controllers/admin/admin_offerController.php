<?PHP
use coreAppNS\Controller;

class admin_offerController extends Controller{
public $controller;
public $prod_model;
public $function;
public $prod_model2;




function __construct($function="index"){
    @session_start();
    if(isset($_SESSION['uid'])){
     $this->u=$_SESSION['uid'];}else{
     $this->u=0;}
        $this->controller=new Controller();
       $this->prod_model=$this->controller->model_object->create_model('product');
       //$this->prod_model2=$this->controller->model_object->create_model('product');
       $this->user_model=$this->controller->model_object->create_model('users');


        $this->$function();
        
}


function index(){
        $items=array(
           // 'categories_parent'=>$this->prod_model->getDataC(),
            'products'=>$this->prod_model->getDataOffer(),
            'products'=>$this->prod_model->getDataofferPercent(),
            'products'=>$this->prod_model->getDataofferGift(),
            'user'=>$this->user_model->getOne($_SESSION['id']),

   
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}


 //

//////////////////////////////offers///////////////////////////

function offers()
{
    $items=array(
        'products'=>$this->prod_model->getDataOfferOrGift(),
        'products1'=>$this->prod_model->getDataOrder(),
        'user'=>$this->user_model->getOne($_SESSION['id']),

           );
    $this->controller->view_object->create_view('admin/offers',$items);

}

function offerPercent()
{
    $items=array(
        'products'=>$this->prod_model->getDataofferPercent(),
        'user'=>$this->user_model->getOne($_SESSION['id']),

           );
    $this->controller->view_object->create_view('admin/offer_percent',$items);

}

function offerGift()
{
    $items=array(
        'products'=>$this->prod_model->getDataofferGift(),
        'products1'=>$this->prod_model->getDataOrder(),
        'user'=>$this->user_model->getOne($_SESSION['id']),

           );
    $this->controller->view_object->create_view('admin/offer_gift',$items);

}



}
?>