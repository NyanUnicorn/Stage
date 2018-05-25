<?php
namespace Enumeration;

abstract class Roles{
  const __default = self::User;

  const User = 0;
  const Admin = 1;

  public static function toString($val){
    $str = '';
    if($val == self::User){$str = 'User';}
    if($val == self::Admin){$str = 'Admin';}
    return $str;
  }
}
