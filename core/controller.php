<?PHP
namespace coreAppNS;
class Controller{
   public $view_object;
    public $model_object;

    function __construct(){

        $this->model_object=new Model();
        $this->view_object=new View();

    }

}
?>