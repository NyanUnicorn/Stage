<?php
namespace Service;



Class Db extends \PDO{
  public function __construct($dsn = 'mysql:dbname=lechiroquiroule;host=127.0.0.1', $username = 'root', $password = null, array $options = NULL) {
      parent::__construct($dsn, $username, $password, $options);

  }
}
