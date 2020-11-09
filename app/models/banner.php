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

function  getDataOrder()
{
    $final_query= $this->db->select('*').$this->db->from('banner').$this->db->orderbymore('banner_id',' DESC');
    return $this->db->executeb($final_query); 
        
}

function addData($data)
{
       $final_query= $this->db->insertrow("advertisements",$data);
        if( $this->db->executea($final_query))
           {
             echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';
            }
        else
           {
             echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';

            }
}

function updateData($data)
{
       $id= $data['adds_id'];
         $final_query= $this->db->updaterow("advertisements",$data).$this->db->whereone('adds_id','=',$id);
            if( $this->db->executea($final_query))
            {
               echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';
            }else{
               echo '<meta http-equiv = "refresh" content = "0.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';

            } 
}

function deleteone($id)
{
        $final_query= $this->db->delete('*').$this->db->from('advertisements').$this->db->whereone('adds_id','=',$id);
        return $this->db->executea($final_query); 
}




function selecADS1()
{
   //$place=1;
   $final_query= $this->db->select('*').$this->db->from('advertisements').$this->db->whereone('place_in_home','=','1');
    return $this->db->executeb($final_query); 
}




}

?>