<?php

function getAllCustomers() {
    
    $db = openDatabaseConnection();

    $sql = 'SELECT * FROM `customers`';
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

function getCustomer($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM customers WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function store($naam, $adres, $postcode, $stad, $telefoon, $email){
    // Maak hier de code om een medewerker toe te voegen
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();

        $sql = "INSERT INTO `customers` (naam, adres, postcode, stad, telefoon, email) VALUES (:naam, :adres, :postcode, :stad, :telefoon, :email)";
        $query = $conn->prepare($sql);

            $query->bindParam(":naam", $naam);
            $query->bindParam(":adres", $adres);
            $query->bindParam(":postcode", $postcode);
            $query->bindParam(":stad", $stad);
            $query->bindParam(":telefoon", $telefoon);
            $query->bindParam(":email", $email);
            $query->execute();
        }
    // Vang de foutmelding af
    catch(PDOException $e){
        // Zet de foutmelding op het scherm
        echo "Connection failed: " . $e->getMessage();
    }
 }