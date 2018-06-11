<?php
require '../src/autoload.php';


use Service\Connection;
session_start();

Connection::logout();
header('Location: /index.php');
