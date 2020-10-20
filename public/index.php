
<?php 

require_once '../vendor/autoload.php';

use App\Wcs\Hello;

$coucou = new Hello();
echo $coucou -> talk();

?>
