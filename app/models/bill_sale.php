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
   function checkout($uid){
   
   $uid;
   return $uid;
   
   }
    
    function totalcost($uid){
 
     
   $final_query= "select product_id from orders where user_id= $uid";
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
               $final_query= "SELECT SUM(product_price) AS sumcollll FROM products WHERE Product_id in ($datar)";
                $result =$this->db->connect()->prepare($final_query);
			$result->execute();
           $result1= $result->fetchAll(PDO::FETCH_OBJ);
           return $result1;
        
        }
        }else{
        }

        }
 
    
}

?>