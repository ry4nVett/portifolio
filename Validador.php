<?php
class Validador{
    private $errors = [];

    public function validarDados($data)
    {
        $this->errors = []; // Limpa erros anteriores

        // Valida nome
        if (empty($data['name'])) {
            $this->errors['name'] = 'O nome é obrigatório.';
        }

        // Valida e-mail
        if (empty($data['email'])) {
            $this->errors['email'] = 'O e-mail é obrigatório.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'O e-mail fornecido não é válido.';
        }

        // Valida mensagem
        if (empty($data['message'])) {
            $this->errors['message'] = 'A mensagem é obrigatória.';
        }

        return $this->errors;
    }

    public function getErros()
    {
        return $this->errors;
    }
}
?>
