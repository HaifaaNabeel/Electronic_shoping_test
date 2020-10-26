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
        if($_GLOBALS['ROLE']==1) { 
            header('location:admin/admin_sess/check_admin_how?id='.$_GLOBALS['UID']);
         exit();
	}elseif($_GLOBALS['ROLE']==0){
             session_start();
$_SESSION['uid']=$_GLOBALS['UID'];
echo $_SESSION['uid'];
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
    /*

    function  getData(){
        $cols=array("");
        $tbls=array("users");

        return  $this->db
        ->select($cols)
        ->from($tbls)
        //->where("category_is_active","=","1")
        //->where('parent','=','0')
        ->build()
        ->exeucte();
    }
*/

}

?>