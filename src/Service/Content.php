<?php
namespace Service;

use Repository\PageRepository as PageRep;
use Enumeration\NavItem;

Class Content{
  public static function navElements(){
    $btn = NavItem::Button;
    $drp = NavItem::Dropdown;
    $udrp = NavItem::UDropdown;
    //create array for:
    $navElms;
    //get page titles and type
    $pages = PageRep::getPages()->fetchAll();

    //get page subsections if type is dropdown
    foreach($pages as $page){
      if($page['type'] == $drp){
        $pgfs = PageRep::getParagraphTitles($page['id'])->fetchAll();
        $page['paragraphs'] = $pgfs;
      }
      $navElms[$page['id']] = $page;
    }
    return $navElms;
  }
}
