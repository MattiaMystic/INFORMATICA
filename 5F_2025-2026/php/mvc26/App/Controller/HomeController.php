<?php

namespace App\Controller;
class HomeController
{
    private $pages;
    public function __construct($db = null)
    {
        $appConf = require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'appConfig.php';
        $this->pages = $appConf['Pages'];
    }
    public function homePagePresentation()
    {
        $content= 'Hi, I\'m the home page of the site.';
        require $this->pages.'content.php';
    }

}
