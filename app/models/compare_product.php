<?PHP
class compare_product{
   public  $db;

    function __construct(){
        $this->db=new DB();
    }
    /***************************************
    ========================================
    compare_products functions
    ========================================
    ***************************************/
    function add_to_compare($items){
      $pid=$_POST['product_id'];    
      $qty=$_POST['qty'];    
      $uid=$_POST['user']; 
        if($uid==0){
        @session_start();
            $_SESSION['filter'];
            array_push($_SESSION['filter'],$pid);
            print_r($_SESSION['filter']);
        }elseif($uid!=0){
               $final_query = "INSERT INTO `compare_product`(`user_id`, `product_id`) VALUES ('$uid',$pid)";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }      }
    }
    function delete_from_compare($items){
      $pid=$_POST['product_id'];    
      $uid=$_POST['user'];
      if($uid==0){
           @session_start();
          $ar=$_SESSION['filter'];
           $ar=array_diff($ar,[$pid]);
         $_SESSION['filter']= $ar;
           print_r($_SESSION['filter']);
        }elseif($uid!=0){
               $final_query = "delete from `compare_product` where `user_id`=$uid and `product_id`=$pid ";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }      
}
        }
  
     function  getOnefilter($uid){
       $final_query= "select * from compare_product where user_id= $uid";
$result = $this->db->connect()->prepare($final_query);
			$result->execute();
          $coun= $result->rowcount();
        if($coun > 0){
   return $mefi=array('f'=>$coun);
        }
        else{
             @session_start();
            if(isset($_SESSION['filter'])){
            $size=sizeof($_SESSION['filter']);
               return $mefi=array('f'=>$size);
            }else{
                   return $mefi=array('f'=>$coun);

            }

        }
  }
    function fetchfilter($uid){     
   $final_query= "select product_id from compare_product where user_id= $uid";
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
               $final_query= "select * from products where Product_id in($datar)";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
            else{
            header('location:comparee');

            }
        }
        elseif($count == 0){
                 @session_start();
            if(isset($_SESSION['filter'])){
            $size1=sizeof($_SESSION['filter']);
                 if($size1 >0){
                $uniqe=array_unique($_SESSION['filter']);
                $data=implode(',' ,$uniqe);
                 $final_query= "select * from products where Product_id in($data)";
            return $this->db->executeb($final_query);
            }
                 
            else{
                 header('location:comparee');
        }

        }
        }
 }
   
    
   
    
}

?>