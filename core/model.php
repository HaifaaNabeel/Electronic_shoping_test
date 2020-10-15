<?PHP
namespace coreAppNS;

class Model{
    function  create_model($model_name){

        require_once("app/models/".$model_name.".php");
        $requestedModel=$model_name;

        return new $requestedModel();





    }

}
?>