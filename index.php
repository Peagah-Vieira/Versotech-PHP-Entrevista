<?php

require_once __DIR__ . '/vendor/autoload.php';

use \App\Repository\UserDao;

$users = UserDao::getUsers();

include __DIR__ . '/resources/views/components/header.php';
include __DIR__ . '/resources/views/components/list.php';
include __DIR__ . '/resources/views/components/footer.php';
