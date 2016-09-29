<?php
use \Pubsubhubbub\Subscriber\Subscriber;

$hub_url = "http://pubsubhubbub.appspot.com";
$callback_url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$s = new Subscriber($hub_url, $callback_url);
$feed = "http://feeds.feedburner.com/onlineaspect";

$s->subscribe($feed);

