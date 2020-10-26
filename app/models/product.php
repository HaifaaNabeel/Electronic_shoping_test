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

}

?>