<?php
namespace App\Model;
require_once dirname(__DIR__,2). '/Functions/functions.php';
use Exception;
use PDO;

class Tablet
{
    private PDO $db;
    public  function __construct($db) {
        $this->db=$db;
    }
  //(alcuni) metodi che corrispondono al CRUD
    public function showAll():array{
        $listOfTablet=[];
        $query= "SELECT * FROM tablet";
        try{
            $stm= $this->db->prepare($query);
            $stm->execute();
            while($product= $stm->fetch()) {
                $listOfTablet[]=$product;
            }

        } catch (Exception $e) {
            logError($e);
        }
        return $listOfTablet;
    }

    public function createOne(array $tablet):bool {
        $query =  'INSERT INTO tablet (Brand, Model, ScreenSize, StorageGB, RAMGB, OS, Price, ReleaseDate) VALUES(:brand, :model, :screensize, :storageGB, :RAMGB, :OS,:price, :releaseDate)' ;
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':brand', $tablet['brand']);
            $stmt->bindValue(':model', $tablet['model']);
            $stmt->bindValue(':screensize', $tablet['screensize']);
            $stmt->bindValue(':storageGB', $tablet['storageGB']);
            $stmt->bindValue(':RAMGB', $tablet['RAMGB']);
            $stmt->bindValue(':OS', $tablet['OS']);
            $stmt->bindValue(':price', $tablet['price']);
            $stmt->bindValue(':releaseDate', $tablet['releaseDate']);
            return $stmt->execute();
        }
        catch(Exception $e) {
            logError($e);
            return false;
        }
    }
    public function getModelAndBrand(): array
    {
        $listOfModelBrand=[];
        $sql = "SELECT id,model, brand FROM tablet";
        try{
            $stm = $this->db->prepare($sql);
            $stm->execute();
            while($product= $stm->fetch()) {
                $listOfModelBrand[]=$product;
            }
            $stm->closeCursor();

        } catch (Exception $e) {
            logError($e);
        }
        return $listOfModelBrand;
    }

}
