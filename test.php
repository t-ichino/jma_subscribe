<?php
include("vendor/pubsubhubbub/subscriber/src/Subscriber.php");
use \Pubsubhubbub\Subscriber\Subscriber;

$callback_func = "callback.php";
$hub_url = "https://pubsubhubbub.appspot.com";
// $hub_url = "https://pubsubhubbub.superfeedr.com/";
$callback_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $callback_func;

$s = new Subscriber($hub_url, $callback_url);
$feed = "http://feeds.feedburner.com/onlineaspect";
// $feed = "http://rss.rssad.jp/rss/itmtop/2.0/itmedia_all.xml";

$res = $s->subscribe($feed);
if($res){
  var_dump($res);
}else{
  echo "subscribe failed";
//  echo $res;
}
