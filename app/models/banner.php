 <?PHP

class banner{


   public  $db;

function __construct(){
        $this->db=new DB();
    }

function  getOne($id)
{
        $final_query= $this->db->select('*').$this->db->from('banner');
        return $this->db->executeb($final_query); 
}
    function getOnee($id)
{
 $final_query= $this->db->select('*').$this->db->from('banner').$this->db->whereone('banner_id','=',$id);
 return $this->db->executeb($final_query); 
}

function  getDataOrder()
{
    $final_query= $this->db->select('*').$this->db->from('banner').$this->db->orderbymore('banner_id',' DESC');
    return $this->db->executeb($final_query); 
        
}

function addData($data)
{  
    $img=$_FILES['banner_img'];
    $title=$_POST['banner_title'];
    $status=$_POST['banner_status'];
    $date=$_POST['banner_added_date'];
    $imagename= $_FILES['banner_img']['name'];  
$imagetype= $_FILES['banner_img']['type'];   
$imagetemp= $_FILES['banner_img']['tmp_name'];   
$imagesize= $_FILES['banner_img']['size']; 
    
    $sql="insert INTO `banner`(`banner_img`, `banner_title`, `banner_status`, `banner_added_date`)  values ('$imagename','$title','$status','$date')";    
      $result =$this->db->connect()->prepare($sql);
			if($result->execute()){ 
                $path='app/assets/img/banner_image/'.$imagename;
                move_uploaded_file($imagetemp,$path);
             echo '<meta http-equiv = "refresh" content = "0.1; url = http://localhost/Electronic_shoping_test/admin/admin_banner/banner" />';
            
            
            }
}

function updateData($data)
{
    $img=$_FILES['banner_img'];
    $oldimg=$_POST['banner_imgs'];
    $title=$_POST['banner_title'];
    $id=$_POST['banner_id'];
    $status=$_POST['banner_status'];
    $date=$_POST['banner_added_date'];
    $imagename= $_FILES['banner_img']['name'];  
$imagetype= $_FILES['banner_img']['type'];   
$imagetemp= $_FILES['banner_img']['tmp_name'];   
$imagesize= $_FILES['banner_img']['size']; 
    if($imagename != ""){
    $sql="update `banner` set `banner_img`='$imagename', `banner_title`='$title', `banner_status`='$status', `banner_added_date`= '$date' where banner_id=$id ";    
      $result =$this->db->connect()->prepare($sql);
			if($result->execute()){ 
                unlink('app/assets/img/banner_image/'.$oldimg);
                $path='app/assets/img/banner_image/'.$imagename;
                move_uploaded_file($imagetemp,$path);
             echo '<meta http-equiv = "refresh" content = "0.1; url = http://localhost/Electronic_shoping_test/admin/admin_banner/banner" />';
           }
}elseif($imagename == ""){
    
      $sql="update `banner` set `banner_title`='$title', `banner_status`='$status', `banner_added_date`= '$date' where banner_id=$id ";    
      $result =$this->db->connect()->prepare($sql);
			if($result->execute()){ 
             echo '<meta http-equiv = "refresh" content = "0.1; url = http://localhost/Electronic_shoping_test/admin/admin_banner/banner" />';
        }
    
    
}
}

function deleteone($id)
{
        $final_query= $this->db->delete('*').$this->db->from('banner').$this->db->whereone('banner_id','=',$id);
        return $this->db->executea($final_query); 
}    

}

?>