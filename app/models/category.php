<?PHP


include("core/db.php");

class category{


   public  $db;

function __construct(){
        $this->db=new DB();
    }

function  getOne($id)
{
        $final_query= $this->db->select('date_added').$this->db->from('categories').$this->db->whereone('category_id','=',$id);
        return $this->db->executeb($final_query); 
}

function  getData()
{
        $final_query= $this->db->select('date_added').$this->db->from('categories');
        return $this->db->executeb($final_query);  
}
function  getDataOrder()
{
    $final_query= $this->db->select('*').$this->db->from('categories').$this->db->orderbymore('date_added',' DESC');
    return $this->db->executeb($final_query); 
        
}
function addData($data)
{
       $final_query= $this->db->insertrow("categories",$data);
        if( $this->db->executea($final_query))
           {
             echo '<meta http-equiv = "refresh" content = ".5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/categories" />';
            }
        else
           {
             echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/categories" />';

            }
}

function updateData($data)
{
       $id= $data['category_id'];
         $final_query= $this->db->updaterow("categories",$data).$this->db->whereone('category_id','=',$id);
            if( $this->db->executea($final_query))
            {
               echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/categories" />';
            }else{
               echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/categories" />';

            } 
}

function deleteone($id)
{
        $final_query= $this->db->delete('*').$this->db->from('categories').$this->db->whereone('category_id','=',$id);
        return $this->db->executea($final_query); 
}

///////////////////////////////////////product////////////////////////////////

function addDataP($data)
{
       $final_query= $this->db->insertrow("products",$data);
        if( $this->db->executea($final_query))
           {
             echo '<meta http-equiv = "refresh" content = ".5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/index" />';
            }
        else
           {
             echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_cat/index" />';

            }
}

function  getDataOrderP()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->orderbymore('product_date_added',' DESC');
    return $this->db->executeb($final_query); 
        
}
//////////////////////////for show all category and is active////
function  getDataWhereOrder()
{
    $final_query= $this->db->select('*').$this->db->from('categories').$this->db->whereone('category_is_active','=','1').$this->db->orderbymore('date_added',' DESC').$this->db->orderbymoreorder('category_id',' DESC');
    return $this->db->executeb($final_query); 
        
}
 
function  getDataWhereOrderProd()
{
    $final_query= $this->db->select('*').$this->db->from('products').$this->db->whereone('product_is_active','=','1').$this->db->orderbymore('product_date_added',' DESC').$this->db->orderbymoreorder('Product_id',' DESC');
    return $this->db->executeb($final_query); 
        
}

}

?>