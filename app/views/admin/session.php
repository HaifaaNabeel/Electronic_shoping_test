<?php 
if(isset($_SESSION['id'])){
   echo $_SESSION['id'];
 echo '<meta http-equiv = "refresh" content = "0; url = http://localhost/Electronic_shoping_test/admin/admin_cat/index" />';
}else{
    echo "mmmmm";
    header('location:../../login');
   exit();
}
?>