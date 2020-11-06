<?PHP
class users{

public  $db;

    function __construct(){
        $this->db=new DB();
    }
    function loginhere($page){
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
         @session_start();
$_SESSION['uid']=$_GLOBALS['UID'];
echo $_SESSION['uid'];
        $id=$_SESSION['uid'];
$_SESSION['cart'];
$_SESSION['favore'];
        
        if(sizeof($_SESSION['cart'])!=0){
    foreach ($_SESSION['cart'] as $index=>$column) {
foreach($column as $key=>$value){
$me=$_GLOBALS['UID'];
$date=date('y-m-d');
$i=$_SESSION['cart'][$index]['p_id'];
$o=$_SESSION['cart'][$index]['p_qty'];

}
                 $final_query = "INSERT INTO `orders`(`user_id`, `product_id`, `quantity`,order_date) VALUES ('$me',$i,$o,'$date')";
if( $this->db->executea($final_query)){
echo"yees";           
}else{
echo"no";
}

}
        }else{
         echo"there is items in cart";  
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

}
  
        }else{
         echo"there is items in favore";  
            print_r($_SESSION['favore']);
        }        
header('location:'.$page);
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

////////////////for login by goooooooogle
    function login_google($x,$y)
    {      
        $name=$x;
        $pass="";
        $email=$y;
        $active="1";
        $role="0";
        $date=date('y-m-d');
        $admin='1';
        $SQL = "SELECT * FROM users where user_name='$name' and user_pass='$pass' and user_is_active=1 ";
			$result = $this->db->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
            if($count >= 1)
            {
                    echo 'done hhhhhhhhhhhhhhhhhhhhhhhhh check in ';
              }
           else
            { 
                $final_query="INSERT INTO `users`(`user_name`, `user_email`, `user_pass`, `user_is_active`, `user_roles`, `date_added`, `admin_who_added`) VALUES ('$name','$email','$pass','$active','$role','$date','$admin')";
                   if( $this->db->executea($final_query))
                       { //echo 'done hhhhhhhhhhhhhhhhhhhhhhhhh insert';
                           header('location:home');
                         }
                    else
                          { //echo 'not done mmmmmmmmmmmmmmmmmmmmmmm insert';
                             header('location:login');
                           }
            }

    }

    function getOne($id)
    {
        $final_query=$this->db->select('*').$this->db->from('users').$this->db->whereone('user_id','=',$id);
        return $this->db->executeb($final_query);

    }


}

?>