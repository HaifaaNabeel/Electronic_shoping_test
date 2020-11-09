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
        $final_query= "select DISTINCT * from favorite_products where user_id= $uid";
$result = $this->db->connect()->prepare($final_query);
			$result->execute();
          $count1= $result->rowcount();
        if($count1 > 0){
   return $mef=array('f'=>$count1);
        }
        else{
             @session_start();
            if(isset($_SESSION['favore'])){
            $uniqe=array_unique($_SESSION['favore']);
            $size=sizeof($uniqe);
               return $mef=array('f'=>$size);
            }else{
                   return $mef=array('f'=>$count1);

            }

        }
  }  
    function fetchfavorite($uid){     
   $final_query= "select DISTINCT product_id from favorite_products where user_id= $uid";
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
               $final_query= "select DISTINCT * from products where Product_id in($datar)";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
            else{
            header('location:favoritee');

            }
        }
        elseif($count == 0){
                 @session_start();
            if(isset($_SESSION['favore'])){
            $size1=sizeof($_SESSION['favore']);
                 if($size1 >0){
                $uniqe=array_unique($_SESSION['favore']);
                $data=implode(',' ,$uniqe);
                 $final_query= "select DISTINCT * from products where Product_id in($data)";
            return $this->db->executeb($final_query);
            }
                 
            else{
                 header('location:favoritee');
        }

        }
        }
 }
   
    
}

?>