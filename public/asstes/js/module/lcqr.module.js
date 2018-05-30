var app = angular.module('lechiroquiroule', []);

app.controller('menuCollapse', function($scope){
  var d = document.getElementById("hamburger");
  d.classList.add += " otherclass";
});
