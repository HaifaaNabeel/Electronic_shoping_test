<?PHP
class users{

public  $db;

    function __construct(){
        $this->db=new DB();
    }
    function loginhere(){
            if(isset($_POST['Login'])){
              $name=$_POST['user_name'];
              $pass=$_POST['user_pass'];
                $SQL = "SELECT * FROM users where user_name='$name' and user_pass='$pass' and user_is_active=1 ";
			$result = $this->db->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
                if($count>=1){
                while($row=$result->fetch()) :
                    $_GLOBALS['ROLE']=$row['user_roles'];
                    $_GLOBALS['UID']=$row['user_id'];
                endwhile;
        if($_GLOBALS['ROLE']>=1) { 
            header('location:admin/admin_sess/check_admin_how?id='.$_GLOBALS['UID']);
         exit();
	}elseif($_GLOBALS['ROLE']==0){
             session_start();
$_SESSION['uid']=$_GLOBALS['UID'];
echo $_SESSION['uid'];
            $id=$_SESSION['uid'];
    $_SESSION['cart'];
    $_SESSION['favore'];
            if(sizeof($_SESSION['cart'])!=0){
foreach ($_SESSION['cart'] as $item) {
    $me=$_GLOBALS['UID'];
    $date=date('y-m-d');
     $final_query = "INSERT INTO `orders`(`user_id`, `product_id`, `quantity`,order_date) VALUES ('$me',$item,'1','$date')";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }    
 
    echo $item."<br>";
}
      
            }else{
             echo"there is items in cart";  
                print_r($_SESSION['cart']);
            }
     if(sizeof($_SESSION['favore'])!=0){
foreach ($_SESSION['favore'] as $item1) {
    $me1=$_GLOBALS['UID'];
     $final_query = "INSERT INTO `favorite_products`(`user_id`, `product_id`) VALUES ('$me1',$item1)";
    if( $this->db->executea($final_query)){
echo"yees";           
    }else{
echo"no";
 }    
 
    echo $item."<br>";
}
      
            }else{
             echo"there is items in favore";  
                print_r($_SESSION['favore']);
            }        
   header('location:home');
         exit();}
                }elseif($count==0){
                echo'<script>
                      document.getElementById("error").style.display="block";
                </script>';
          }
       }
       
    }




    function signup(){
    
    if(isset($_POST['singup'])){
              $name=$_POST['user_name'];
              $pass=$_POST['user_pass'];
              $email=$_POST['user_email'];
              $active=$_POST['user_is_active'];
              $role=$_POST['user_roles'];
              $date=$_POST['date_added'];
              $admin=$_POST['admin_who_added'];
        $final_query="INSERT INTO `users`(`user_name`, `user_email`, `user_pass`, `user_is_active`, `user_roles`, `date_added`, `admin_who_added`) VALUES ('$name','$email','$pass','$active','$role','$date','$admin')";
 if( $this->db->executea($final_query)){
     header('location:login');
            }else{
      header('location:login');

 }               
       }
    }


}

?>