<?PHP

 class session{
   public  $db;
    function __construct(){
        $this->db=new DB();
    }

 function getsession($id){
 $SQL = "SELECT * FROM users where user_id=$id AND  user_roles > 0 and user_is_active=1 ";
			$result = $this->db->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count==1)   { 
            while($row=$result->fetch()) :
            $uid=$row['user_id'];
             $_GLOBALS['ID']=$uid;
         endwhile;   
            session_start();
$_SESSION['id']=$uid;
echo $_SESSION['id'];
	}elseif($count==0){
     echo'<div class="col-12 text-center alert-danger">sure if  correct</div>';  
           
	}
 
 }
     function end_session(){
     session_start();
session_unset();
session_destroy();
header('location:../../login');
exit();
     }
}

?>