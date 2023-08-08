<?php

require_once __DIR__ . '/vendor/autoload.php';

use \App\Repository\UserDao;

$users = UserDao::getUsers();

include __DIR__ . '/templates/includes/header.php';
include __DIR__ . '/templates/includes/list.php';
include __DIR__ . '/templates/includes/footer.php';

// DELETE USER
// $userDao->delete(1);

// echo "User deleted successfully";
