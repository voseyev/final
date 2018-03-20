<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 3/18/18
 * Time: 12:59 PM
*/

require("config.php");

class database
{
    function connect()
    {
        try {
            //Instantiate a database object
            $dbh = new PDO(DB_DSN, DB_USERNAME,
                DB_PASSWORD);

            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return;
        }
    }
    function addClient($firstName, $lastName, $email)
    {
        $dbh = $this->connect();
        //1. define the query

        $sql = "INSERT INTO Customers (firstname, lastname, email)
            VALUES (:firstName, :lastName, :email)";

        //2. prepare the statement
        $statement = $dbh->prepare($sql);

        //3. bind parameters
        $statement->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $statement->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);

        $success = $statement->execute();
        return $success;
    }
    function getClients()
    {
        $dbh = database::connect();
        $sql = "SELECT * FROM Customers ORDER BY lastname";
        $statement = $dbh->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    function deleteClient($id) {
        $dbh = database::connect();
        $sql = "DELETE FROM `Customers` WHERE `Customers`.`customer_id` = $id";
        $statement = $dbh->prepare($sql);
        $statement->execute();
    }
}