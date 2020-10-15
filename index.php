<?PHP
use coreAppNS\Route;
use coreAppNS\Controller;
use coreAppNS\View;
use coreAppNS\model;
include("core/route.php");
include("core/controller.php");
include("core/view.php");
include("core/model.php");
$url=isset($_GET['url'])?$_GET['url']:"home";
//echo $url;
new Route($url);


?>

