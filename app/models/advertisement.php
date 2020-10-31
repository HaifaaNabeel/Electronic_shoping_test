
    <?PHP

class advertisement{


   public  $db;

function __construct(){
        $this->db=new DB();
    }

function  getOne($id)
{
        $final_query= $this->db->select('adds_img').$this->db->from('advertisements').$this->db->whereone('adds_id','=',$id);
        return $this->db->executeb($final_query); 
}

// function  getData()
// {
//         $final_query= $this->db->select('adds_img').$this->db->from('advertisements');
//         return $this->db->executeb($final_query);  
// }
function  getDataOrder()
{
    $final_query= $this->db->select('*').$this->db->from('advertisements').$this->db->orderbymore('adds_id',' DESC');
    return $this->db->executeb($final_query); 
        
}
function  getDataC()
{
        $final_query= $this->db->select('date').$this->db->from('advertisements');
        return $this->db->executeb($final_query);  
}

function addData($data)
{
       $final_query= $this->db->insertrow("advertisements",$data);
        if( $this->db->executea($final_query))
           {
             echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/advertisements" />';
            }
        else
           {
             echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/advertisements" />';

            }
}

function updateData($data)
{
       $id= $data['adds_id'];
         $final_query= $this->db->updaterow("advertisements",$data).$this->db->whereone('adds_id','=',$id);
            if( $this->db->executea($final_query))
            {
               echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';
            }else{
               echo '<meta http-equiv = "refresh" content = "05.5; url = http://localhost/Electronic_shoping_test/admin/admin_adv/index" />';

            } 
}

function deleteone($id)
{
        $final_query= $this->db->delete('*').$this->db->from('advertisements').$this->db->whereone('adds_id','=',$id);
        return $this->db->executea($final_query); 
}






}

?>