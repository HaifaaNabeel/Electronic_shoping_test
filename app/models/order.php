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
      $price=$_POST['price'];    
        $date=date('y-m-d');
        if($uid==0){
        @session_start();
            $_SESSION['cart'];
            $item=array('p_id'=>$pid,'qty'=>$qty,'price'=>$price);
            array_push($_SESSION['cart'],$item);
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
    
    function update_cart_qty($items){
      $pid=$_POST['product_id'];    
      $qty=$_POST['qty'];    
      $uid=$_POST['user']; 
      $price=$_POST['price'];    
        $date=date('y-m-d');
        if($uid==0){
        @session_start();
            $_SESSION['cart'];
            $item=array('p_id'=>$pid,'qty'=>$qty,'price'=>$price);
            array_push($_SESSION['cart'],$item);
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
          foreach($_SESSION['cart'] as $index=>$column){
foreach($column as $key=>$value){
if($key=='p_id' && $value==$pid){
				$sp=array();
				$sp=$_SESSION['cart'];
				unset($sp[$index]);
				$_SESSION['cart']=$sp;
			}
		
	
}
}
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
      function add_to_qty($items){
    $pid=$_POST['product_id'];    
      $uid=$_POST['user'];
      $qty=$_POST['qty'];
   $k= ++$qty;
        if($uid==0){
           @session_start();
          foreach($_SESSION['cart'] as $index=>$column){
foreach($column as $key=>$value){
if($key=='p_id' && $value==$pid){
				$sp=array();
				$sp=$_SESSION['cart'];
				unset($sp[$index]);
				$_SESSION['cart']=$sp;
			}
		
	
}
}
             print_r($_SESSION['cart']);
        }elseif($uid!=0){
               $final_query = "update `orders` set `quantity`=$qty where `product_id`=$pid and user_id=$uid";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 } 
    
    }
      }
     function delete_from_qty($items){
    $pid=$_POST['product_id'];    
      $uid=$_POST['user'];
      $qty=$_POST['qty'];
   $k= --$qty;
        if($uid==0){
           @session_start();
          foreach($_SESSION['cart'] as $index=>$column){
foreach($column as $key=>$value){
if($key=='p_id' && $value==$pid){
				$sp=array();
				$sp=$_SESSION['cart'];
				unset($sp[$index]);
				$_SESSION['cart']=$sp;
			}
		
	
}
}
             print_r($_SESSION['cart']);
        }elseif($uid!=0){
               $final_query = "update `orders` set `quantity`=$k where `product_id`=$pid and user_id=$uid";
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
            if(sizeof($arr)>0){
               $final_query= " select DISTINCT products.Product_id,products.product_main_image,products.product_name ,products.product_price,orders.quantity FROM orders,products WHERE products.Product_id in ($datar) and orders.user_id=$uid";
            return $this->db->executeb($final_query);
			$result50->execute();
        return $result50;
        }
            else{
            header('location:carte');

            }
        }     elseif($uid==0){
         @session_start();
            if(isset($_SESSION['cart'])){
            $size1=sizeof($_SESSION['cart']);
                 if($size1 >0){
                $uniqe=array_unique($_SESSION['cart']);
                     $data=implode(',' ,array_keys($uniqe));                     
                 $final_query= " select DISTINCT products.Product_id,products.product_main_image,products.product_name ,products.product_price,orders.quantity FROM orders,products WHERE products.Product_id in ($data)";
            return $this->db->executeb($final_query);
            }
                 
            else{
                 header('location:carte');
        }

        }
        } else{
            header('location:carte');

            }
 }
   
    
    /*
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
        }else{
header('location:carte');
               }
        
        }
        elseif($count == 0){
                 @session_start();
            if(isset($_SESSION['cart'])){
            $size1=sizeof($_SESSION['cart']);
                if($size1 >0){
                    $uniqe=array_unique($_SESSION['cart']);
                $data=implode(',' ,$uniqe);
                 $final_query= "SELECT SUM(product_price) AS sumcollll FROM products WHERE Product_id in ($data)";
                $result =$this->db->connect()->prepare($final_query);
			$result->execute();
           $result1= $result->fetchAll(PDO::FETCH_OBJ);
           return $result1;
             }else{
          //   $no=array('sumcollll'=>0);
           // return $no;
                    header('location:carte');

            }
            }
                 
            }else{
        }

        }
 
  */
   
    
  
   
    
}

?>