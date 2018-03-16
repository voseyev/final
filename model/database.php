<?php
/**
 * Created by PhpStorm.
 * User: MACBOOK
 * Date: 3/2/18
 * Time: 12:59 PM

CREATE TABLE `Members` (
`member_id` INT NOT NULL AUTO_INCREMENT,
`fname` VARCHAR(45) NULL,
`lname` VARCHAR(45) NULL,
`age` INT NULL,
`gender` VARCHAR(10) NULL,
`phone` INT NULL,
`email` VARCHAR(45) NULL,
`state` VARCHAR(45) NULL,
`seeking` VARCHAR(15) NULL,
`bio` TEXT NULL,
`premium` TINYINT(1) NULL,
`image` VARCHAR(45) NULL,
`interests` VARCHAR(100) NULL,
PRIMARY KEY (`member_id`))
 */

require("/home/zkunitsa/config.php");

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
    function addMember($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio, $premium, $image, $interests)
    {
        global $dbh;
        //1. define the query

        $sql = "INSERT INTO Members (fname, lname, age, gender, phone, email, state, seeking, bio, premium, image, interests)
            VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

        //2. prepare the statement
        $statement = $dbh->prepare($sql);

        //3. bind parameters
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_INT);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_INT);
        $statement->bindParam(':image', $image, PDO::PARAM_INT);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);

        //4. execute the statement $statement->bindParam(':premium', $premium, PDO::PARAM_INT);
        $success = $statement->execute();
        return $success;
    }
    function getMembers()
    {
        global $dbh;
        $sql = "SELECT * FROM Members ORDER BY fname";
        $statement = $dbh->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}