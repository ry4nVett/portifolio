<?php
require_once 'Validador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validador = new Validador();
    $errors = $validador->validarDados($_POST);

    if (empty($errors)) {
        // Processar os dados (por exemplo, enviar um e-mail ou salvar em um banco de dados)
        echo 'Formulário enviado com sucesso!';
    } else {
        // Exibir erros
        foreach ($errors as $campo => $erro) {
            echo "<p class='error'>{$erro}</p>";
        }
    }
}
?>
