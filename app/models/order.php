<?PHP
class order{
   public  $db;

    function __construct(){
        $this->db=new DB();
    }
    /***************************************
    ========================================
    cart functions
    ========================================
    ***************************************/
    function add_to_cart($items){
      $pid=$_POST['product_id'];    
      $qty=$_POST['qty'];    
      $uid=$_POST['user']; 
        $date=date('y-m-d');
        if($uid==0){
        @session_start();
            $_SESSION['cart'];
            array_push($_SESSION['cart'],$pid);
            print_r($_SESSION['cart']);
        }elseif($uid!=0){
               $final_query = "INSERT INTO `orders`(`user_id`, `product_id`, `quantity`,order_date) VALUES ('$uid',$pid,'$qty','$date')";
            $result = $this->db->connect()->prepare($final_query);
			
    if( $result->execute()){
echo"yees";           
    }else{
echo"no";
 }      }
    }
    function delete_from_cart($items){
      $pid=$_POST['product_id'];    
      $uid=$_POST['user'];
      if($uid==0){
           @session_start();
          $ar=$_SESSION['cart'];
           $ar=array_diff($ar,[$pid]);
         $_SESSION['cart']= $ar;
           print_r($_SESSION['cart']);
        }elseif($uid!=0){
               $final_query = "delete from `orders` where `user_id`=$uid and `product_id`=$pid ";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }      
}
        }
 
    function  getOne($uid){
        $final_query= "select * from orders where user_id= $uid";
$result = $this->db->connect()->prepare($final_query);
			$result->execute();
          $count= $result->rowcount();
        if($count > 0){
       return $me=array('c'=>$count);
        }
        else{
             @session_start();
            if(isset($_SESSION['cart'])){
            $size=sizeof($_SESSION['cart']);
               return $me=array('c'=>$size);
            }else{
                   return $me=array('c'=>$count);

            }

        }
  }
    
 function fetchcart($uid){
 
     
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
               $final_query= "select * from products where Product_id in($datar)";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
        elseif($count == 0){
                 @session_start();
            if(isset($_SESSION['cart'])){
            $size1=sizeof($_SESSION['cart']);
                $uniqe=array_unique($_SESSION['cart']);
                $data=implode(',' ,$uniqe);
                 $final_query= "select * from products where Product_id in($data)";
            return $this->db->executeb($final_query);
            }
                 
            }

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
               $final_query= "SELECT SUM(product_price) AS sumcollll FROM products WHERE Product_id in ($datar)";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
        elseif($count == 0){
                 @session_start();
            if(isset($_SESSION['cart'])){
            $size1=sizeof($_SESSION['cart']);
                $uniqe=array_unique($_SESSION['cart']);
                $data=implode(',' ,$uniqe);
                 $final_query= "SELECT SUM(product_price) AS sumcollll FROM products WHERE Product_id in ($data)";
            return $this->db->executeb($final_query);
            }
                 
            }

        }
 
    
    
   
    
}

?>