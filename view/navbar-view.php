<div class="nav-wrapper">
  <nav id="custom-menu" class="nav_bar" role="navigation" data-spy="affix" data-offset-top="165">
    <span id="hamburger" class="hamburger" ng-click="toggleMenu();"><i class="fas fa-bars"></i></span>
    <ul class="nav_items">
      <?php
      use Service\Content;

      $elms = Content::navElements();
      $items = '';
      foreach($elms as $elm){
        $item = '<li class="nav_item" ' . ($uri== '/' . $elm['linkName'] . '.php' | $uri=='' ? 'active' : '') .'>';
        $item = $item . '<a href="' . $elm['linkName'] . '"> <i class="flaticon-' . $elm['icone'] . ' "></i>' . $elm['name'] .'</a>';
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

</div>
