<?php

namespace App\Controller;
use App\Model\Tablet;

class TabletController
{
    protected Tablet $tablet;
    private $pages;
    public function __construct($db) {
        $appConf = require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'appConfig.php';
        $this->pages = $appConf['Pages'];
        require $appConf['Model'].'Tablet.php';
        $this->tablet= new Tablet($db);
    }
    function showAllTablet():void
    {
      $tablets= $this->tablet->showAll();
      require $this->pages.'showAllTablet.php';
    }
    function modelAndBrand():void
    {
        $tablets= $this->tablet->getModelAndBrand();
        require $this->pages.'showAllTablet.php';
    }
    function formInsertOneTablet():void{
        require $this->pages.'formInsertTablet.php';
    }


    function insertOneTablet():void
    {
        $tablet = [];
        $tablet['brand'] = $_POST['brand'] ?? '';
        $tablet['model'] = $_POST['model'] ?? '';
        $tablet['screensize'] = $_POST['screensize'] ?? '';
        $tablet['RAMGB'] = $_POST['ramGB'] ?? '';
        $tablet['storageGB'] = $_POST['storageGB'] ?? '';
        $tablet['OS'] = $_POST['os'] ?? '';
        $tablet['price'] = $_POST['price'] ?? '';
        $tablet['releaseDate'] = $_POST['releaseDate'] ?? '';
        if ($this->tablet->createOne($tablet)) {
            $content = 'Tablet inserted';
            require $this->pages.'home.php';
        } else {
            $content = 'DB error - tablet not inserted';
            require $this->pages.'content.php';
        }
    }



}
