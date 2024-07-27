<?php

class FormValidator {
    private $name;
    private $email;
    private $message;
    private $errors = [];

    public function __construct($name, $email, $message) {
        $this->name = trim($name);
        $this->email = trim($email);
        $this->message = trim($message);
    }

    public function validate() {
        $this->validateName();
        $this->validateEmail();
        $this->validateMessage();
        return empty($this->errors); // Retorna verdadeiro se não houver erros
    }

    private function validateName() {
        if (empty($this->name)) {
            $this->errors['name'] = "O campo nome é obrigatório.";
        }
    }

    private function validateEmail() {
        if (empty($this->email)) {
            $this->errors['email'] = "O campo e-mail é obrigatório.";
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "O formato do e-mail é inválido.";
        }
    }

    private function validateMessage() {
        if (empty($this->message)) {
            $this->errors['message'] = "O campo mensagem é obrigatório.";
        }
    }
}
?>