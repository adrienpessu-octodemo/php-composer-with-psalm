<p>
	Example timer in PHP
</p>


<?php 

require('vendor/autoload.php');
use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();
sleep(rand(1, 3));
$time = $timer->stop();

print ($time->asString());
?>

<?php 
function getName() : string {
    return $_GET['name'] ?? 'unknown';
}

function sayHello() : string {
    return 'Hello ' . getName();
}
?>

<!-- wrap call in htmlentities() to fix -->
<h1><?= sayHello() ?></h1>