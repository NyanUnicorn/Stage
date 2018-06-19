<?php
namespace Service;


class Image{


  public static function displayImage(){
    $output = [];
    $argv = func_get_args();
    switch(func_num_args()){
      case 1:
        $image = self::displayImage1($argv[0]);
        break;
      case 2:
        $image = self::displayImage2($argv[0], $argv[1]);
        break;
    }
    return $image;
  }


  public static function displayImage1($_name){
    return 'SRC="data:image/'. pathinfo($_name, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents("../assets/img/$_name")) . '"';
  }
  public static function displayImage2($_path, $_name){
    return 'SRC="data:image/'. pathinfo($_name, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents("$_path/assets/img/$_name")) . '"';
  }

}

?>
