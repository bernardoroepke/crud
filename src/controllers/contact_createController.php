<?php 

session_start();
requireValidSession();

if(isset($_POST['name']) AND (isset($_POST['phone']) OR isset($_POST['email']))) {
    $contact = new Contact($_POST);
    $contact->insert();
    header("Location: contactsController.php");
}



loadTemplateView('contact_create');

?>