<?php 

session_start();
requireValidSession();

if($_POST['id']) {
    $id = $_POST['id'];
    $contact = Contact::getOne(['id' => $id]);
}

if(isset($_POST['name']) OR (isset($_POST['phone']) OR isset($_POST['email']))) {
    $contact = new Contact($_POST);
    $contact->update();
    header("Location: contactsController.php");
}



loadTemplateView('contact_edit', ['contact' => $contact]);

?>