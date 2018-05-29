<div class="nav-wrapper">
  <nav id="custom-menu" class="" role="navigation" data-spy="affix" data-offset-top="165">
    <ul class="nav_items">
      <?php
      use Service\Content;

      $elms = Content::navElements();
      $items = '';
      foreach($elms as $elm){
        $item = '<li class="nav_item" ' . ($uri== '/' . $elm['linkName'] . '.php' | $uri=='' ? 'active' : '') .'>';
        $item = $item . '<a href="' . $elm['linkName'] . '">' . $elm['name'] . '</a>';
        if (isset($elm['paragraphs'])){
          $item = $item . '<ul class="nav_dropdown">';
          foreach($elm['paragraphs'] as $par){
            $item = $item . '<li> <a href="#">dddddddddddddddddddddd</a> </li>';
          }
          $item = $item . '</ul>';
        }else{/*
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';
          $item = $item . '<div></div>';*/
        }

        $item = $item . '</li>';
        $items = $items . $item;
      }
      echo $items;
       ?>

    </ul>
  </nav>

</div>
