app.controller('carousel', function($scope){
  var id_list = [];
  countReviews();

  $scope.generateRandomeId = function(){
    id_list.push(makeId('', id_list));
    console.log(id_list);
  }

  function idExists(text, _text, list){
    var exists = false;
    angular.forEach(list, function(item){
        if(item == text || item == _text){
            exists = true;
          }
        });
    return exists;
  }

  function makeId(_text, list) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 5; i++)
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    if(idExists(text, _text, list)){
      text = makeId(text ,list);
    }
    return text;
  }

  function countReviews(){
    console.log(document.getElementsByClassName('fbrev'));
    var elms = document.getElementsByClassName('fbrev');
    angular.forEach(elms, function(value, key){
      console.log('this is ' + value.className + '    ' + key);
    });
  }
});
