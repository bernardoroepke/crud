<?php

class Register extends Model {

    public function checkRegister() {
        if($this->password == $this->repeatpassword) {            
            $user = User::getOne(['email' => $this->email]);
            if(!$user) {
                $hash = password_hash($this->password, PASSWORD_DEFAULT);
                $args = ['name' => $this->name, 'email' => $this->email, 'password' => $hash, 'is_admin' => $this->is_admin];
                $user = new User($args);
                $user->insert();
            } else {
                throw new AppException('Esse email já foi cadastrado.');
            }
        } else {
            throw new AppException('As senhas não são iguais.');
        }
    }
}

?>