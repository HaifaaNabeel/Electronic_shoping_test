<?PHP
use coreAppNS\Controller;

class admin_giftController extends Controller{
public $controller;
public $prod_model;
public $function;
public $prod_model2;
public $final_query;




function __construct($function="index"){

        $this->controller=new Controller();
       $this->prod_model=$this->controller->model_object->create_model('product');
       //$this->prod_model2=$this->controller->model_object->create_model('product');

        $this->$function();
        
}


function index(){
        $items=array(
           // 'categories_parent'=>$this->prod_model->getDataC(),
           
            'products'=>$this->prod_model->getDataofferGift(),
            'product'=>$this->prod_model->getDataGift(),
   
        );
        
        $this->controller->view_object->create_view('admin/homeAdmin',$items);
}




//////////////////////////////offers///////////////////////////



function offerGift()
{
    $items=array(
        'products'=>$this->prod_model->getDataofferGift(),
           );
    $this->controller->view_object->create_view('admin/offer_gift',$items);

}


function  getDataGift()
{
        $final_query= $this->db->select('product_main_image').$this->db->from('products').$this->db->whereone('gift_id','=','Product_id');
       
        return $this->db->executeb($final_query);  
}


}
?>