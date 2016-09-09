<?php
/**
 * Created by PhpStorm.
 * User: ichaube
 * Date: 6/23/2016
 * Time: 5:56 PM
 */
$URL1=$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $URL1;
echo '</BR>';
$res = explode('/', parse_url($url, PHP_URL_PATH));
$res = $res[2].'/'.$res[3];
echo $res;

?>