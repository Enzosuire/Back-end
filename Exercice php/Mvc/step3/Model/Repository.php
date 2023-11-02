<?php


 abstract class Repository
{
    private $bdd;



    protected  function getBdd():PDO{

        $username = "root";
        $password = "";
        $dsn = "mysql:host=localhost; dbname=db_countries; port=3306; charset=utf8";

        $db = new PDO($dsn, $username, $password);
        $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        return $db;
    }
   
   


 
}
