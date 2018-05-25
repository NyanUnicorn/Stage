<?php
namespace Enumeration;

abstract class Status{
  const __default = self::Active;

  const Innactive = 0;
  const Active = 1;
  const Deleted = 2;
  const Suspended = 3;

  public static function toString($val){
    $str = '';
    if($val == self::Innactive){$str = 'Innactive';}
    if($val == self::Active){$str = 'Active';}
    if($val == self::Deleted){$str = 'Deleted';}
    if($val == self::Suspended){$str = 'Suspended';}
    return $str;
  }
}
