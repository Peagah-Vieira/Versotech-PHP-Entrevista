<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Usuário');

use \App\Models\User;
use \App\Repository\UserDao;

// POST VALIDATION
if (isset($_POST['name'], $_POST['email'])) {
    $user = new User();
    $userDao = new UserDao();

    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);

    $userDao->create($user);

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/templates/includes/header.php';
include __DIR__ . '/templates/includes/form.php';
include __DIR__ . '/templates/includes/footer.php';
