<?php
namespace Repository;

use Service\DB;

class PageRepository {

  public static function getPages(){
    $query = new DB();
    return $query->query("SELECT * FROM Page");
  }
  public static function getParagraphTitles($_id){
    $query = new DB();
    return $query->query("SELECT id, title, position, link_label FROM Page_content WHERE page_id = $_id ORDER BY position ASC");
  }
}
