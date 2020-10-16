<?PHP


include("core/db.php");

class compare_product{


   public  $db;

    function __construct(){
        $this->db=new DB("localhost","ecommerce_project","root","");
    }


    function  getData(){
        $cols=array("");
        $tbls=array("compare_product");

        return  $this->db
        ->select($cols)
        ->from($tbls)
        //->where("category_is_active","=","1")
        //->where('parent','=','0')
        ->build()
        ->exeucte();
    }


    function addData($data){
        
        //$this->db->insert("categories",$data);
    }

    function update(){

       


    }
    function delete(){

    }
}

?>