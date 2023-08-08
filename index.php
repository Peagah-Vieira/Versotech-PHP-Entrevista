<?php

require_once __DIR__ . '/vendor/autoload.php';

use \App\Models\UserDao;

$users = UserDao::getUsers();

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';

// $user = new \App\Models\User();
// $userDao = new \App\Models\UserDao();

// UPDATE USER
// $user->setId(1);
// $user->setName('Dummy');
// $user->setEmail('dummy@gmail.com');

// $userDao->update($user);

// echo "User updated successfully";

// DELETE USER
// $userDao->delete(1);

// echo "User deleted successfully";
