<?php
namespace Service;


use Repository\PageRepository as PageRep;
use Enumeration\NavItem;
use Repository\CompteurRepository as ComptRep;

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

  public static function generateParagraphs($_uri){
    $content = PageRep::getParagraphs(str_replace('/', '', str_replace('.php', '', $_uri)))->fetchAll();
    $pars = '';
    foreach($content as $cont){
      $pars .= '<h2 id="'.$cont['link_label'].'">'.$cont['title'].'</h2>';
      $pars .= $cont['paragraph'];
    }
    return $pars;
  }

  public static function getReviews(){
    $reviews = PageRep::getReviews()->fetchall();
    $section = '<div class="review_wrapper" ng-controller="carousel"><div class="scroll_left" ng-click="nextSlide();"><i class="fas fa-caret-left"></i></div><div class="fbreviews">';
    $section .= '<div  class="fbrev_wrap">';
    $i = 0;
    foreach($reviews as $review){
      $i = $i + 1;
      $section .= '<div class="fbrev">';
      $section .= $review['embedded'];
      $section .= '</div>';
    }
    $section .= '</div></div><div class="scroll_right" ng-click="prevSlide();"><i class="fas fa-caret-right"></i></div></div>';
    return $section;
  }
  public static function getBTReviews(){
    $reviews = PageRep::getReviews()->fetchall();
    $section = '';
    $i = 0;

      $section .= '<ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
    foreach($reviews as $review){
      $i = $i + 1;
      $section .= '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
    }
    $section .= '</ol><div class="carousel-inner" role="listbox">';

    $i = 0;
    foreach($reviews as $review){
      if($i == 0){
        $section .= '<div class="item active"><div class="frame">';
      }else{
        $section .= '<div class="item"><div class="frame">';
      }
      $section .= $review['embedded'];
      $section .= '</div></div>';
      $i = $i + 1;
    }
    $section .= '</div>';
    return $section;
  }


  public static function cropString($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
  }
}
