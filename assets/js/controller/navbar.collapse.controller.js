app.controller('menuCollapse', function($scope){
  var toggle = "toggled";
  var bd = "";
  var h = document.getElementById("hamburger");
  var menu = document.getElementById("mobile_menu");
  var body = document.getElementById("body");
  var clearSpace = document.getElementById("clear_space");

  h.classList = "hamburger " + toggle;
  body.classList = "menu";
  menu.classList = toggle;
  clearSpace.classList = toggle;

  console.log($scope);
  $scope.toggleMenu = function(){
    if(toggle === "untoggled"){
      bd = "menu"
      toggle = "toggled";
    }else{
      toggle = "untoggled";
      bd = ""
    }
    h.classList = "hamburger " + toggle;
    body.classList = bd;
    menu.classList = toggle;
    clearSpace.classList = toggle;
  }
});
