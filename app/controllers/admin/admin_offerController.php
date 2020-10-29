<?PHP
use coreAppNS\Controller;

class admin_offerController extends Controller{
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
           // 'categories_parent'=>$this->prod_model->getDataC(),
            'products'=>$this->prod_model->getDataOffer(),
            'products'=>$this->prod_model->getDataofferPercent(),
            'products'=>$this->prod_model->getDataofferGift(),
   
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}


 //

//////////////////////////////offers///////////////////////////

function offers()
{
    $items=array(
        'products'=>$this->prod_model->getDataOffer(),
           );
    $this->controller->view_object->create_view('admin/offers',$items);

}

function offerPercent()
{
    $items=array(
        'products'=>$this->prod_model->getDataofferPercent(),
           );
    $this->controller->view_object->create_view('admin/offer_percent',$items);

}

function offerGift()
{
    $items=array(
        'products'=>$this->prod_model->getDataofferGift(),
           );
    $this->controller->view_object->create_view('admin/offer_gift',$items);

}


}
?>