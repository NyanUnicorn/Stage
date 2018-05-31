app.controller('menuCollapse', function($scope){
  var toggle = "toggled";
  var bd = " ";
  var h = document.getElementById("hamburger");
  var menu = document.getElementById("mobile_menu");
  var body = document.getElementById("body");
  var pw = document.getElementById("page_wrapper");

  h.classList = "hamburger " + toggle;
  body.classList = "menu";
  menu.classList = toggle;
  pw.classList = "page_wrapper " + toggle;

  console.log($scope);
  $scope.toggleMenu = function(){
    if(toggle === "untoggled"){
      bd = "menu"
      toggle = "toggled";
    }else{
      toggle = "untoggled";
      bd = ""
    }
    pw.classList = "page_wrapper " + toggle;
    h.classList = "hamburger " + toggle;
    body.classList = bd;
    menu.classList = toggle;
  }
});
