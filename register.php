<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Usuário');

use \App\Models\User;
use \App\Models\UserDao;

// POST VALIDATION
if (isset($_POST['name'], $_POST['email'])) {
    $user = new User();
    $userDao = new UserDao();

    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);

    $userDao->create($user);

    echo $_POST['name'] . "was created successfully";
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
