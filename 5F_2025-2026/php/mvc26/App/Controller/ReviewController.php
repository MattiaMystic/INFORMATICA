<?php

namespace App\Controller;
use App\Model\Review;
use App\Model\Tablet;

class ReviewController
{
    protected Review $review;
    protected Tablet $tablet;
    private $pages;
    public function __construct($db) {
        $appConf = require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'appConfig.php';
        $this->pages = $appConf['Pages'];
        require $appConf['Model'].'Review.php';
        $this->review= new Review($db);
        require $appConf['Model'].'Tablet.php';
        $this->tablet = new Tablet($db);
    }
    function showAllReviews():void
    {
      $reviews= $this->review->showAll();
      require $this->pages.'showAllReviews.php';
    }
    function formInsertOneReview():void{
        $modelBrand= $this->tablet->getModelAndBrand();
        require $this->pages.'formInsertReview.php';
    }


    function insertOneReview():void
    {
        $review = [];
        $review['tablet_id'] = $_POST['tablet_id'] ?? '';
        $review['reviewer_name'] = $_POST['reviewer_name'] ?? '';
        $review['comment'] = $_POST['comment'] ?? '';
        $review['rating'] = $_POST['rating'] ?? '';
        $review['date'] = date('Y-m-d H:i:s');

        if ($this->review->createOne($review)) {
            $content = 'Review inserted';
            require $this->pages.'home.php';
        } else {
            $content = 'DB error - review not inserted';
            require $this->pages.'content.php';
        }
    }



}
