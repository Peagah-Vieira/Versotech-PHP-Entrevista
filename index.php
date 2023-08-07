<?php

require_once 'vendor/autoload.php';

$user = new \App\Model\User();

$user->setName('Pedrinho');
$user->setEmail('pedrinho@gmail.com');

$userDao = new \App\Model\UserDao();

$userDao->create($user);

echo "Created user";


