<?php 

session_start();
requireValidSession();

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    Contact::deleteById($id);
}

$contacts = Contact::get(['iduser' => $_SESSION['user']->id]);

loadTemplateView('contacts', ['contacts' => $contacts]);

?>