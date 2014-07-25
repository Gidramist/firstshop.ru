<?php


class Controller
{
    function getUrl() {
		$url = !isset($_GET['url']) ? 'index' : $_GET['url'];
		$url = rtrim($url,"/");
		$url = explode("/", $url);


        return $url;

	    }

	}

    function getIndex() {

    $Model= new Model;
    $View = new View;

    }


 ?>
