<?php
/**
 * Created by PhpStorm.
 * User: rzala
 * Date: 9/25/2018
 * Time: 2:12 AM
 */

class patients
{
    function count() {
        global $pdo;
        $sql = "SELECT * FROM patients";
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result->rowCount();
    }

}