<?php

namespace App\Model;
require_once dirname(__DIR__,2). '/Functions/functions.php';

use Exception;
use PDO;

class Review
{
    private PDO $db;
    public  function __construct($db) {
        $this->db=$db;

    }

    public function createOne(array $review):bool {
        $query =  'INSERT INTO tablet_review (tablet_id, reviewer_name, comment, rating,review_date) VALUES(:tablet_id, :reviewer_name, :comment, :rating, :date)' ;
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':tablet_id', (int) $review['tablet_id'], PDO::PARAM_INT);
            $stmt->bindValue(':reviewer_name', $review['reviewer_name']);
            $stmt->bindValue(':comment', $review['comment']);
            $stmt->bindValue(':rating', (int) $review['rating'], PDO::PARAM_INT);
            $stmt->bindValue(':date', $review['date']);
            return $stmt->execute();
        }
        catch(Exception $e) {
            logError($e);
            return false;
        }
    }

    public function showAll():array{
        $listOfReview=[];

        $query= 'SELECT tr.*, t.model  FROM tablet_review as tr join tablet as t on t.id=tr.tablet_id';
        try{
            $stm= $this->db->prepare($query);
            $stm->execute();
            while($review= $stm->fetch()) {
                $listOfReview[]=$review;
            }

        } catch (Exception $e) {
            logError($e);
        }
        return $listOfReview;
    }

}
