
<nav id="custom-menu" class="menu_bar" role="navigation" data-spy="affix" data-offset-top="0">
  <ul class="menu_items">
    <?php
    use Service\Content;
    $elms = Content::navElements();
    $items = '';
    foreach($elms as $elm){
      $item = '<li class="menu_item" ' . ($uri== '/' . $elm['linkName'] . '.php' | $uri=='' ? 'active' : '') .'>';
      $item = $item . '<a href="#">' . $elm['name'] . '</a>';
      if (isset($elm['paragraphs'])){
        $item = $item . '<ul class="nav_dropdown">';
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
