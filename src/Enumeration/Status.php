<?php
namespace Enumeration;

abstract class Status{
  const __default = self::Active;

  const Innactive = 0;
  const Active = 1;
  const Deleted = 2;
  const Suspended = 3;
}
