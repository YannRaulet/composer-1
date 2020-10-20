
<?php 

require_once '../vendor/autoload.php';


use App\Wcs\Hello;           /* namespace\class */
use HelloWorld\SayHello;

$coucou = new Hello();
echo $coucou -> talk();

$reCoucou = new SayHello();
echo $reCoucou->world();

?>
