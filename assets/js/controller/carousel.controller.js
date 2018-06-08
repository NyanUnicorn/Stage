app.controller('carousel', function($scope, $interval){
  var id_list = [];
  var rev_list = [];
  /**
   *compte les témoignages et leirs donne une id
   */
  countReviews();

  $scope.nextSlide = function(){
    //rev_list['1'].style.position = "absolute";
    i=0;
    while(i <= 300){

      i++;
      rev_list['1'].style.left = "-"+i+"px";
      //setDelay(1000);
      setTimeout(this.nextSlide, 2000);

    };
    //rev_list['1'].style.left = "-300px";
    console.log("zbreeeeeh");
  }
  $scope.prevSlide = function(){

  }
/*
  function setDelay(_i) {
  $interval(function(){
    console.log(_i);
  }, 1000);
  }
*/

  function generateRandomeId(){
    var entry = makeId('', id_list);
    id_list.push(entry);
    //console.log(id_list);
    console.log(entry);
    return entry;
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
    var text = 'fbrev-';
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
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
      value.id = generateRandomeId();
      rev_list.push(value);
      console.log('this is ' + value.className + '    ' + key);
    });
  }
});
