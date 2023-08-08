<?php

require __DIR__ . '/vendor/autoload.php';

if (isset($_POST['name'], $_POST['email'])) {
    die('Cadastrar');
}

define('TITLE', 'Cadastrar Usuário');

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
