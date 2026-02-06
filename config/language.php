<?php
if (session_status()===PHP_SESSION_NONE) {
    session_start();
}

if(isset($_GET['lang'])){
    $_SESSION['lang']=$_GET['lang'];
}
$lang=$_SESSION['lang'] ?? 'en';

$rtLangs=['ps','fa'];
$dir=in_array($lang,$rtLangs) ? 'rtl':'ltr';


$path=__DIR__ ."/../lang/{$lang}.php";
if (!file_exists($path)) {
   $path=__DIR__ ."/../lang/en.php";
}
$t=require $path;

function __t(string $key,array $t,string $fallback=''):string{
    return htmlspecialchars($t[$key] ?? $fallback,ENT_QUOTES,'UTF-8');
}
?>