<?php

require_once 'vendor/autoload.php';
$user = new \App\Model\User();
$userDao = new \App\Model\UserDao();

// CREATE USER
// $user->setName('Pedrinho');
// $user->setEmail('pedrinho@gmail.com');
// $userDao->create($user);
// echo "Created user";

// READ USER
// $userDao->read();

// foreach ($userDao->read() as $user) {
//     echo $user['id'] . "<br>" . $user['name'] . "</br>" . $user['email'] . "<hr>";
// }

// UPDATE USER
$user->setId(1);
$user->setName('Dummy');
$user->setEmail('dummy@gmail.com');

$userDao->update($user);

echo "User updated successfully";
