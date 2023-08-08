<?php

require __DIR__ . '/vendor/autoload.php';

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
if (isset($_POST['delete'])) {
    $userDao = new UserDao();

    $userDao->delete($_GET['id']);

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/templates/includes/header.php';
include __DIR__ . '/templates/includes/confirm-delete.php';
include __DIR__ . '/templates/includes/footer.php';
