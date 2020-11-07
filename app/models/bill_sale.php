<?PHP
class bill_sale{
   public  $db;

    function __construct(){
        $this->db=new DB();
    }
    /***************************************
    ========================================
    checkout functions
    ========================================
    ***************************************/
   function checkout1($uid,$bill){
   $final_query= " select * from checkout where user_id=$uid and checkout_id=$bill";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
   }
   


    
 function fetchbill($uid,$bill){    
   $final_query= "select  product_id from orders where user_id= $uid and checkout_num=$bill ";
$result = $this->db->connect()->prepare($final_query);
			$result->execute();
          $count= $result->rowcount();
        if($count > 0){
            $arr=array();
            while($row=$result->fetch()){
                $arr[]=$row['product_id'];
                $size9=sizeof($arr);
                $unique=array_unique($arr);
                $datar=implode(',' ,$unique);
              } 
            if(sizeof($arr)>0){
               $final_query= " select DISTINCT products.Product_id,products.product_name ,products.product_price,orders.quantity,orders.checkout_num FROM products JOIN orders WHERE products.Product_id IN($datar) and orders.product_id=products.Product_id and orders.checkout_num=$bill";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
            else{
            header('location:carte');

            }
        } 
 }  
 
    
}

?>