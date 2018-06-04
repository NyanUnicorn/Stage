
<nav id="mobile-menu" class="menu_bar" >
  <div id="menu_items" class="">
  <ul  class="menu_items">
    <?php
    use Service\Content;
    $elms = Content::navElements();
    $items = '';
    foreach($elms as $elm){
      $item = '<li class="menu_item" ' . ($uri== '/' . $elm['linkName'] . '.php' | $uri=='' ? 'active' : '') .'>';
      $item = $item . '<a href="'.$elm['linkName'].'">' . $elm['name'] . '</a>';
      if (isset($elm['paragraphs'])){
        $q = "'";
        $item = $item . '<i class="fas fa-caret-right" ng-click="selectSub('.$q. $elm['linkName'].(string)$elm['id'].$q .');goToSubmenu();"></i>';
        $item = $item . '<ul id="'. $elm['linkName'].(string)$elm['id'] .'" class="nav_dropdown">';
        $item = $item . '<li ng-click="goToMainmenu();"><a class="backButton"><i class="fas fa-caret-left"> </i> Retour</a></li>';
        foreach($elm['paragraphs'] as $par){
          $item = $item . '<li> <a href="' . $elm['linkName'] . '#' . $par['link_label']  . '">' . $par['title'] . '</a></li>';
          //var_dump($par['link_label']);
        }
        $item = $item . '</ul>';
      }else{
        $item = $item . '<i></i>';
      }
      $item = $item . '</li>';
      $items = $items . $item;
    }
    echo $items;
    require $menuStatus;
    ?>
  </ul>
  </div>
</nav>
