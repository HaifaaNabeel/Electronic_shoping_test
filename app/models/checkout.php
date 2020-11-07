<?PHP
class checkout{
   public  $db;

    function __construct(){
        $this->db=new DB();
    }

    function  getCheckout()
{
    $final_query= $this->db->select('*').$this->db->from('checkout');
        print_r($final_query);
    return $this->db->executeb($final_query); 
        
}

function getBills(){
    $final_query= " select * from checkout ";
             return $this->db->executeb($final_query);
       $result50->execute();
         return $result50;
    }

function getBillNum($user,$cost)
{
   $date=date('y-m-d');
   //$sql = "SELECT * FROM  `checkout` WHERE `user_id` = '$user' AND `checkout_date`= '$date'AND `total_cost`= '$date' ORDER BY `checkout_id` DESC ";
   $sql="SELECT * FROM   `checkout` WHERE `user_id` = '$user' AND `checkout_date`= '$date'AND `total_cost`= '$cost' ORDER BY `checkout_id` DESC  ";
   $x=$this->db->executeb($sql);
   //print_r($x);
   return $this->db->executeb($sql);
}

function  getCheckoutWhere($user)
{ $date=date('y-m-d');
    //$final_query= $this->db->select('*').$this->db->from('checkout').$this->db->whereOne(`checkout_date`,'=','$date').$this->db->whereAnd(`user_id`,'=','$user');
    $sql = "SELECT * FROM  `checkout` WHERE `user_id` = '$user' AND `checkout_date`= '$date' ";
    $this->db->executeb($sql);
    //print_r($this->db->executeb($sql));
     return $this->db->executeb($sql);

        
}

    function insert_bill_sale($user,$cost)
    {  $date=date('y-m-d');
        try
        {
            $sql = "INSERT INTO `checkout` (`user_id`, `checkout_date`, `total_cost`)  VALUES ('$user','$date','$cost')";
            $this->db->executea($sql);
          //print_r( $stmt);
            //$stmt->execute(); 
           echo "Data insert Successfuly in DataBase :)...";
           //return 1;
           $sql = "SELECT * FROM  `checkout` WHERE `user_id` = '$user' AND `checkout_date`= '$date'AND `total_cost`= '$date' ORDER BY `checkout_id` DESC ";
           $x=$this->db->executeb($sql);
           print_r($x);
           return $this->db->executeb($sql);




        }

        catch(PDOException $e)
        {
           echo "insert failed: " . $e->getMessage();
           return 0;
        }
    }

    function update_order($user)
    { echo $user; $date=date('y-m-d');

        $SQL = "SELECT * FROM  `checkout` WHERE `user_id` = '$user' AND `checkout_date`= '$date' ORDER BY `checkout_id` DESC ";
			//$result = $this->db->connect()->prepare($SQL);
            //$result->execute();
            $result=$this->db->executeb($SQL);
            foreach($result as $r)
            {
              $checkout_num= $r->checkout_id;
              try
              {
                  $sql = "UPDATE `orders` SET `checkout_num` = '$checkout_num'  where `order_date`= '$date' and `user_id` ='$user' and `checkout_num` = 0  ";                   
                  //$sql = "INSERT INTO `orders` (`user_id`, `product_id`, `quantity`, `order_date`, `ckeckout_num`) VALUES ('12', '7', '7', '2020-11-05', '40')";
                  $this->db->executea($sql);
                  //$stmt->execute(); 
                  echo "Data Update Successfuly in DataBase :)";
                  return 1;
                  //$sql = "UPDATE `orders` SET `is_checkout` = 1   where `ckeckout_num` = '$checkout_num' ";                   
                  //$sql = "INSERT INTO `orders` (`user_id`, `product_id`, `quantity`, `order_date`, `ckeckout_num`) VALUES ('12', '7', '7', '2020-11-05', '40')";
                  //$this->db->executea($sql);
                  
              }
          catch(PDOException $e) 
              {
                  //echo "Connection failed: " . $e->getMessage();
                  return 0;
              }
            }
    }

    function update_order111($user)
    {
        echo $user; echo $date=date('y-m-d');
        try
                {
                    $sql = "UPDATE `orders` SET `ckeckout_num` =830 where `order_date`= '$date' and `user_id` = '$user' ";                    //$sql = "INSERT INTO `orders` (`user_id`, `product_id`, `quantity`, `order_date`, `ckeckout_num`) VALUES ('12', '7', '7', '2020-11-05', '40')";
                    $this->db->executea($sql);
                    //$stmt->execute(); 
                    echo "Data Update Successfuly in DataBase :)";
                    return 1;
                }
            catch(PDOException $e) 
                {
                    //echo "Connection failed: " . $e->getMessage();
                    return 0;
                }
    }


    function  getorderWhere()
{ $date=date('y-m-d');
    //$final_query= $this->db->select('*').$this->db->from('checkout').$this->db->whereOne(`checkout_date`,'=','$date').$this->db->whereAnd(`user_id`,'=','$user');
    $sql = "SELECT * FROM  `orders` WHERE  `order_date`= '$date' ";
    print_r($this->db->executeb($sql));
    //print_r($this->db->executeb($sql));
     return $this->db->executeb($sql);

        
}



}