<?php
namespace Repository;

use Service\DB;

class PageRepository {

  public static function getPages(){
    $query = new DB();
    $query->exec("SET NAMES 'utf8';");
    return $query->query("SELECT * FROM Page");
  }
  public static function getParagraphTitles($_id){
    $query = new DB();
    $query->exec("SET NAMES 'utf8';");
    return $query->query("SELECT id, title, position, link_label FROM Page_content WHERE page_id = $_id ORDER BY position ASC");
  }
  public static function getParagraphs($_pagelink){
    $query = new DB();
    $query->exec("SET NAMES 'utf8';");
    $return = $query->query("SELECT Page_content.id, Page_content.title, Page_content.position, Page_content.paragraph, Page_content.link_label FROM Page_content LEFT JOIN Page on Page.id = Page_content.page_id WHERE Page.linkName = '$_pagelink' ORDER BY position ASC");
    return $return;
  }
}
