app.controller('menuCollapse', function($scope){
  var toggle = "untoggled";
  var select = " selected";
  var bd = " ";
  var h = document.getElementById("hamburger");
  var menu = document.getElementById("menu_wrapper");
  var selcetedUl = undefined;
  var ul_items = [];


  $scope.toggleMenu = function(){
    if(toggle === "untoggled"){
      resetMenu();
      toggle = "toggled";
      refreshUl();
    }else{
      toggle = "untoggled";
    }

    refreshToggle();
  }
  $scope.untoggleMenu = function(){
    toggle = "untoggled";
    refreshToggle();

  }
  function refreshToggle(){
    h.classList = "hamburger " + toggle;
    menu.classList = toggle;

  }
  function refreshUl(){angular.forEach(ul_items, function(ul_item){
      ul_item.classList = "nav_dropdown ";
    });
  }
  $scope.selectSub = function(_ul){
    var ul_item = document.getElementById(_ul);
    if(selcetedUl !== undefined){
      if(ul_item != selcetedUl){
        if(selcetedUl.classList[1] === "selected"){
          selcetedUl.classList = "nav_dropdown ";
        }
        selcetedUl = ul_item;
        selcetedUl.classList = "nav_dropdown " + select;
      }
    }else{selcetedUl = ul_item;
    selcetedUl.classList = "nav_dropdown " + select;}
  }
  $scope.goToSubmenu = function(){
    var ulmenu = document.getElementById("menu_items");
    ulmenu.classList = "menu_items sub_menu";
  }
  $scope.goToMainmenu = function(){
    resetMenu();
  }
  function resetMenu(){
    var ulmenu = document.getElementById("menu_items");
    ulmenu.classList = "menu_items";
  }
});
