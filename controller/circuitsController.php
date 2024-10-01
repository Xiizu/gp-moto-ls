<?php
function connect(){
    try {
        $host = "127.0.0.1";
        $database = "gp_moto";
        $bdd = 'mysql:host='+$host+';dbname='+$database+';charset=utf8';
        $username = 'projetgit';
        $password = 'projetgit';
        
        $pdo = new PDO($bdd, $username, $password);
        return $pdo;
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function select($info="*", $condition="True"){
    try {
        $sql = "SELECT $info FROM circuit WHERE $condition";
        $requette = connect()->prepare($sql);
        $requette->execute();
        $resultats = $requette->fetchAll();
        return $resultats ;
    }
    catch (PDOException $e) {
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}




?>