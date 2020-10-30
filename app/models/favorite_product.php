<?PHP
class favorite_product{
   public  $db;

    function __construct(){
        $this->db=new DB();
    }
    /***************************************
    ========================================
    favorite_products functions
    ========================================
    ***************************************/
    function add_to_favorite($items){
      $pid=$_POST['product_id'];    
      $qty=$_POST['qty'];    
      $uid=$_POST['user']; 
        $date=date('y-m-d');
        if($uid==0){
        @session_start();
            $_SESSION['favore'];
            array_push($_SESSION['favore'],$pid);
            print_r($_SESSION['favore']);
        }elseif($uid!=0){
               $final_query = "INSERT INTO `favorite_products`(`user_id`,`product_id`) VALUES ($uid,$pid)";
             $result =$this->db->connect()->prepare($final_query);
    if( $result->execute()){
echo"yees";           
    }else{
echo"no";
 }      }
    }
    function delete_from_favorite($items){
      $pid=$_POST['product_id'];    
      $uid=$_POST['user'];
      if($uid==0){
           @session_start();
          $ar=$_SESSION['favore'];
           $ar=array_diff($ar,[$pid]);
         $_SESSION['favore']= $ar;
           print_r($_SESSION['favore']);
        }elseif($uid!=0){
               $final_query = "delete from `favorite_products` where `user_id`=$uid and `product_id`=$pid ";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }      
}
        }
 
    
     function  getOnef($uid){
        $final_query= "select * from favorite_products where user_id= $uid";
$result = $this->db->connect()->prepare($final_query);
			$result->execute();
          $count1= $result->rowcount();
        if($count1 > 0){
   return $mef=array('f'=>$count1);
        }
        else{
             @session_start();
            if(isset($_SESSION['favore'])){
            $size=sizeof($_SESSION['favore']);
               return $mef=array('f'=>$size);
            }else{
                   return $mef=array('f'=>$count1);

            }

        }
  }

    
    
   
    
}

?>