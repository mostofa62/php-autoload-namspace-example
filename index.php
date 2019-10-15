<?php


require __DIR__.DIRECTORY_SEPARATOR.'autoload.php';

use controller\Base;
use models\User;

$base = new Base();
$base->show();

$userModel = new User();
echo $userModel->showParentName()."\n";
echo $userModel->tableName()."\n";


?>