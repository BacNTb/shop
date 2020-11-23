<?php

namespace Mvc\Core;

use Mvc\Core\ResourceModelInterFace;

use Mvc\Config\Database;

class ResourceModel implements ResourceModelInterFace
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }
    public function delete($model) {

    }

    public function save($model)
    {
        $id = $model->getId();

        $table = $this->table;
        $arr = $model->getProperties();

        $newArr = [];

        if ($id) {
            $values = "";

            $valuex = "";
            $keyx = "";

            foreach ($arr as $key => $value) {
                if ($key != "id" && $key != "create_at") {
                    $values .= "$key = :$key ,";

                    $keyx .= "$key ,";
                    $valuex .= "'$value' ,";

                    $newArr[$key] = $value;
                }
            }

            $trimValues = trim($values, ",");

            $trimKey = trim($keyx, ",");
            $trimValue = trim($valuex, ",");


            if ($table == 'image') {
                $sql = "INSERT INTO $this->table ($trimKey) VALUES ($trimValue)";
            } else {
                $sql = "UPDATE $this->table SET $trimValues WHERE id = $id";
            }

            $req = Database::getBdd()->prepare($sql);

            return $req->execute($newArr);
        } else {
            $values = "";
            $keys = "";

            foreach ($arr as $key => $value) {
                if ($key != "id" && $key != "update_at") {
                    $keys .= "$key ,";
                    $values .= "'$value' ,";
                    $newArr[$key] = $value;
                }
            }

            $trimKeys = trim($keys, ",");
            $trimValues = trim($values, ",");

            $sql = "INSERT INTO $this->table ($trimKeys) VALUES ($trimValues)";

            $req = Database::getBdd()->prepare($sql);

            return $req->execute($newArr);
        }
    }

    public function showAll()
    {
        $sql =  "SELECT * FROM $this->table";

        $req = Database::getBdd()->prepare($sql);

        if ($req->execute()) {
            return $req->fetchAll();
        }
    }

    public function showAllLed()
    {

        $sql =  "SELECT * FROM $this->table ORDER BY price ASC";

        $req = Database::getBdd()->prepare($sql);

        if ($req->execute()) {
            return $req->fetchAll();
        }
    }

    public function getId($id)
    {
        $sql =  "SELECT * FROM $this->table WHERE id = $id";

        $req = Database::getBdd()->prepare($sql);

        if ($req->execute()) {
            return  $req->fetch();
        }
    }

    public function showTop5()
    {
        $sql =  "SELECT * FROM $this->table ORDER BY create_at DESC LIMIT 5";

        $req = Database::getBdd()->prepare($sql);

        if ($req->execute()) {
            return $req->fetchAll();
        }
    }

    public function getCate($search)
    {
        $sql =  "SELECT * FROM $this->table WHERE name LIKE '$search'";

        $req = Database::getBdd()->prepare($sql);

        if ($req->execute()) {
            return  $req->fetchAll();
        }
    }

}
