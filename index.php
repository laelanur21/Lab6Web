<?php

require("class/database.php");
require_once("template/header.php");
require_once("class/form.php");

 class lab5{
    private $config = [];
    public function __construct($tugas)
    {
        $this->config=$tugas;
    }
    public function a($lab5){
        if (array_key_exists($lab5,$this->config)){
            require($this->config[$lab5]);
        }
        else{
            require($this->config["home"]);
        }
    }
}

$url=[
    "home"=>"module/home.php",
    "about"=>"module/about.php",
    "contact"=>"module/contact.php",
    "add"=>"module/artikel/add.php",
    "update"=>"module/artikel/update.php",
    "delete"=>"module/artikel/delete.php"
];
$web = new lab5($url);
$web->a(@$_REQUEST["mod"]);
require_once("template/footer.php");