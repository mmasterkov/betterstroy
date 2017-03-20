<?
if ($_SERVER['REQUEST_URI']=="/index2.php") {
  header('Location: http://'.$_SERVER['HTTP_HOST'], true, 301);
  exit;
}
if ($_SERVER['REQUEST_URI']=="/index.php") {
  header('Location: http://'.$_SERVER['HTTP_HOST'], true, 301);
  exit;
}
$r301=array(
"/?%CC%EE%ED%EE%EB%E8%F2%ED%EE%E5_%F1%F2%F0%EE%E8%F2%E5%EB%FC%F1%F2%E2%EE"=>"/",
"/?&mailform"=>"/",
"/?back_url_admin=%2Fbitrix%2Fadmin%2F"=>"/",
"/index.php/"=>"/",
"/index2.php"=>"/",
);
//echo $_SERVER['REQUEST_URI'];

if ( array_key_exists($_SERVER['REQUEST_URI'], $r301) ) {
  header(sprintf('Location: http://%s%s', $_SERVER['HTTP_HOST'], $r301[$_SERVER['REQUEST_URI']]), true, 301);
  exit();
}

$r301poddomen = array(
'/montazh-metallokonstrukcij/'=>'http://montazh-mk.betterstroy.ru/',
);

if (isset($r301poddomen[$_SERVER['REQUEST_URI']])) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ".$r301poddomen[$_SERVER['REQUEST_URI']]);
	exit();
}
?>