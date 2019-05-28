<?php

function getAllCustomers() {
    
    $db = openDatabaseConnection();

    $sql = 'SELECT * FROM `customers`';
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}