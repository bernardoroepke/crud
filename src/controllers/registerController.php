<?php

loadModel('Register');

$exception = null;

if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['repeatpassword'])) {
    $register = new Register($_POST);
    try{
        $user = $register->checkRegister();
        header("Location: loginController.php");
    } catch(AppException $e) {
        $exception = $e;
    }
}

loadView('register', ['exception' => $exception]);

?>