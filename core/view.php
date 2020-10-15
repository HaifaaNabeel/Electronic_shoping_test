<?PHP
namespace coreAppNS;
class View{

   function create_view($view_name,$data=""){
       require_once("app/views/".$view_name.".php");

   }



}
?>