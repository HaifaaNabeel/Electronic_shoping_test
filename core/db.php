<?PHP

class DB{
    public $columns="";
    public $tables="";
    public $cond="";
    //public $final_query="";
    private $connection;
    public $ordBy="";
    public $groupBy="";
    public $limit="";
    public $innJoin="";
    public $leftJoin="";
    public $outJoin="";



   /* function __construct($server,$dbname,$username,$pass){

       // $dsn="mysql:host=".$server.";dbname=".$dbname;
       $dsn="mysql:host=localhost;dbname=ecommerce_project";

        $this->connection=new PDO($dsn,"root","");

    }*/
     public function connect(){
      try {
        $connect = new PDO('mysql:host=localhost;dbname=ecommerce_project;charset=utf8;','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connect;
      } catch (Exception $e) {
        die('Error db(connect) '.$e->getMessage());
      }
    }


    /**********************************************start me builder************************************************/
    
    function selectall($t){
    
      return "select * from ".$t;
    } 
   function select ($col){

        if (empty($this->$col))
        {
            return $this->columns= " select * " ;
        }
     
        else{
            return $this->columns= " select ". $col ." " ;
        }

    }

    function from($tbl){

    return  $this->tables= " from ". $tbl ." ";
       
         

    }
    function whereone($col_name,$con,$val){
      return " where ". $col_name . $con . $val;

    }
    function orderby($col_name,$method){
      return " ORDER BY ". $col_name ." ". $method;

    }
    function groupby($col_name){
      return " GROUP BY ". $col_name ;

    }
    function orderbymore($col_name,$method){
      return " ORDER BY ". $col_name ." ". $method ;
    }



 function executea($sql){
//when use update insert query
      $result =$this->connect()->prepare($sql);
			$result->execute();

    }
    function executeb($sql){

        $result =$this->connect()->prepare($sql);
			$result->execute();
           $result1= $result->fetchAll(PDO::FETCH_OBJ);
           return $result1;
    }

function insertrow($tbl,$items){
      $values=array();
        foreach(array_values($items)as $item)
        {
            $values[]="'".$item."'";
        }
        return  $this->final_query="insert into ".$tbl."(".implode(",",array_keys($items)).") values (".implode(",",$values).")";
}

    function updaterow($tbl,$items){
      
       $keyy= implode(',',array_map(function($v,$k)
                              {return $k .'='."'".$v."'";},$items,array_keys($items)));
   return  $this->final_query=" update ".$tbl." set ".$keyy. "";
        
}

    function selectOrder($ta,$row){
         $this->final_query=$sql ="SELECT * FROM `$ta` ORDER BY `$ta`.`$row` DESC"; 
        
        return $this;
      

    }
    function delete($id){
                return $this->columns= " delete  " ;

    
    }









}

?>