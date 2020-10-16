<?PHP


include("core/db.php");

class category{


   public  $db;

    function __construct(){
        $this->db=new DB("localhost","ecommerce_project","root","");
    }


    function  getData(){
        $cols=array("");
        $tbls=array("categories");
        
        
        
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("category_is_active","=","1")
        ->where('parent','=','0')
        ->build()
        ->exeucte();
    }

    function  getData1(){
        $cols=array("p_id","p_name",'p_main_img');
        $tbls=array("products");
        
        
        
        return  $this->db
        ->select($cols)
        ->from($tbls)
        //->where("is_active","=","1")
        //->where('parent','=','0')
        ->build()
        ->exeucte();
    }




    function addData($data){
        
        $this->db->insert("categories",$data);
    }
    

    function update(){

       


    }
    function delete(){

    }
}

?>