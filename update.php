<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar usuário');

use \App\Models\User;
use \App\Repository\UserDao;

// ID VALIDATION
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

$user = UserDao::getUserById($_GET['id']);

// USER VALIDATION
if (!$user instanceof User) {
    header('location: index.php?status=error');
    exit;
}

// POST VALIDATION
if (isset($_POST['name'], $_POST['email'])) {
    $user = new User();
    $userDao = new UserDao();

    $user->setId($_GET['id']);
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);

    $userDao->update($user);

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/templates/includes/header.php';
include __DIR__ . '/templates/includes/form.php';
include __DIR__ . '/templates/includes/footer.php';
