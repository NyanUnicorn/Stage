app.controller('menuCollapse', function($scope){
  var toggle = "toggled";
  var select = " selected";
  var bd = " ";
  var h = document.getElementById("hamburger");
  var menu = document.getElementById("menu_wrapper");
  var selcetedUl = undefined;
  var ul_items = [];

  h.classList = "hamburger " + toggle;

  menu.classList = toggle;
  console.log($scope);
  $scope.toggleMenu = function(){
    if(toggle === "untoggled"){
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
        console.log(selcetedUl.classList[1] === "selected");
        if(selcetedUl.classList[1] === "selected"){
          selcetedUl.classList = "nav_dropdown ";
        }
        selcetedUl = ul_item;
        selcetedUl.classList = "nav_dropdown " + select;
      }
    }else{selcetedUl = ul_item;
    selcetedUl.classList = "nav_dropdown " + select;}



    //selcetedUl.classList = "nav_dropdown " + select;
    //selcetedUl = ul_item;
    //ul_items.push(ul_item);
    //console.log(ul_item.classList[1] == "selected");
    //console.log(ul_items);
    //refreshToggle();
    //ul_item.classList = "nav_dropdown " + select;

  }
});
