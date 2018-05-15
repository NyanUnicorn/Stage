<?php
session_start();
require '../src/autoload.php';

//require '../models/style.php';
use Service\Style;
require '../models/connections.php';
require '../models/image.php';

$head = Style::includeExternalHead();
$stylsheet = Style::getStylesheet('style') . Style::getStylesheet('style_menu');
$foot = Style::includeExternalFoot();

require '../view/index-view2.php';

?>
