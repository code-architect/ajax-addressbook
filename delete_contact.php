<?php
/**
 * Created by PhpStorm.
 * User: RED SKULL
 * Date: 22-Dec-14
 * Time: 1:11 AM
 */


include('core/init.php');

//create db object
$db = new Database();

//Run Query
$db->query("DELETE FROM contacts WHERE id = :id");

// Bind Values
$db->bind(':id', $_POST['id']);

// Execute
if($db->execute()){
    echo "Contact was deleted";
}else{
    echo "Could not delete contact";
}