<?php

require '../db/database.php';

if ( isset($_POST['value']) === true && $_POST['value'] != ' ') {

    $value = trim($_POST['value']);
    //$value = 'g';

    $pdo = Database::connect();

    $sql = "SELECT name FROM names where name LIKE ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($value . '%'));
    $data = $q->fetchAll(PDO::FETCH_ASSOC);

    Database::disconnect();
    //var_dump($data);
    if(isset($data)) {
        echo '<ul>';
        foreach($data as $dataOne) {
            echo '<li><a href=#>'.$dataOne['name'].'</a></li>';
        }
        echo '</ul>';
    } else {
        echo 'Name not found for this name';
    }
}