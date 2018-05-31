
<nav id="mobile-menu" class="menu_bar" >
  <ul class="menu_items">
    <?php
    use Service\Content;
    $elms = Content::navElements();
    $items = '';
    foreach($elms as $elm){
      $item = '<li class="menu_item" ' . ($uri== '/' . $elm['linkName'] . '.php' | $uri=='' ? 'active' : '') .'>';
      $item = $item . '<a href="'.$elm['linkName'].'">' . $elm['name'] . '</a>';
      if (isset($elm['paragraphs'])){
        $q = "'";
        $item = $item . '<i class="fas fa-caret-right" ng-click="selectSub('.$q. $elm['linkName'].(string)$elm['id'].$q .');"></i>';
        $item = $item . '<ul id="'. $elm['linkName'].(string)$elm['id'] .'" class="nav_dropdown">';
        foreach($elm['paragraphs'] as $par){
          $item = $item . '<li> <a href="' . $elm['linkName'] . '#' . $par['link_label']  . '">' . $par['title'] . '</a> </li>';
        }
        $item = $item . '</ul>';
      }
      $item = $item . '</li>';
      $items = $items . $item;
    }
    echo $items;
    require $navStatus;
    ?>
  </ul>
</nav>
