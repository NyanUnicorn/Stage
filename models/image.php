<?php
function displayImage($_name){
  return 'SRC="data:image/'. pathinfo($_name, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents("../assets/img/$_name")) . '"';
}



  /*
  header('Content-Type: image/jpg');
  readfile("/assets/img/img_alexandre_velo.jpg");
  */

?>
