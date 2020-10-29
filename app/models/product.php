<?PHP

class product{


   public  $db;

function __construct(){
        $this->db=new DB();
    }

function  getOne($id)
{
        $final_query= $this->db->select('product_date_added').$this->db->from('products').$this->db->whereone('Product_id','=',$id);
        return $this->db->executeb($final_query); 
}

function  getData()
{
        $final_query= $this->db->select('product_date_added').$this->db->from('products');
        return $this->db->executeb($final_query);  
}
function  getDataOrder()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->orderbymore('product_date_added',' DESC');
    return $this->db->executeb($final_query); 
        
}

function addData($data)
{
       $final_query= $this->db->insertrow("products",$data);
        if( $this->db->executea($final_query))
           {
             echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/index" />';
            }
        else
           {
             echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/index" />';

            }
}

function updateData($data)
{
       $id= $data['Product_id'];
         $final_query= $this->db->updaterow("products",$data).$this->db->whereone('Product_id','=',$id);
            if( $this->db->executea($final_query))
            {
               echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/index" />';
            }else{
               echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_prod/index" />';

            } 
}

function deleteone($id)
{
        $final_query= $this->db->delete('*').$this->db->from('products').$this->db->whereone('product_id','=',$id);
        return $this->db->executea($final_query); 
}
/////////////////////////////////////////////////   to get category    /////////////////////////////////////////////

function  getDataOrderC()
{
    $final_query= $this->db->select('*').$this->db->from('categories').$this->db->orderbymore('date_added',' DESC');
    return $this->db->executeb($final_query); 
        
}
function  getDataC()
{
        $final_query= $this->db->select('date_added').$this->db->from('categories');
        return $this->db->executeb($final_query);  
}
///////////////////////////////////////////    get prod where order   ////////////////////////////////
function  getDataWhereOrderProd($id)
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('category_id','=',$id).$this->db->orderbymore('product_date_added',' DESC').$this->db->orderbymoreorder('Product_id',' DESC');
    return $this->db->executeb($final_query); 
        
}
function  getOneCat($id)
{
        $final_query= $this->db->select('category_name').$this->db->from('categories').$this->db->whereone('category_id','=',$id);
        return $this->db->executeb($final_query); 

}

function  getDataWhereOrder()
{
    $final_query= $this->db->select('*').$this->db->from('categories').$this->db->whereone('category_is_active','=','1').$this->db->orderbymore('date_added',' DESC').$this->db->orderbymoreorder('category_id',' DESC');
    return $this->db->executeb($final_query); 
        
}
function  getDataWhereOrderProd_just()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->orderbymore('product_date_added',' DESC').$this->db->orderbymoreorder('Product_id',' DESC');
    return $this->db->executeb($final_query); 
        
}
/////////////////// get//////////// 

function  getDataWhereOrderProd_details($id)
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('Product_id','=',$id);
    return $this->db->executeb($final_query); 
        
}


///////////////////// get offers ////////////////////////

function  getDataOffer()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('product_is_offer','=','1');
    return $this->db->executeb($final_query); 
        
}



function getDataofferPercent()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('product_offer_percent','=','1');
    return $this->db->executeb($final_query); 
}

function getDataofferGift()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('product_is_gift','=','1');
    return $this->db->executeb($final_query); 
}



}

?>