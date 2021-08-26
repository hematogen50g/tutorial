<?php 
include_once "../../header.php";

echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

mkdir('test');

rename('test','renamed');
rmdir('renamed');
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';
file_put_contents('sample.txt', "felis dolet");
echo file_get_contents('dolorem.txt');

?>