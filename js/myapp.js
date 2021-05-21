angular.module('ui.bootstrap.demo', ['ui.bootstrap']);
angular.module('ui.bootstrap.demo').controller('CarouselDemoCtrl', function ($scope) {
  $scope.myInterval = 5000;
  $scope.noWrapSlides = false;
  $scope.active = 0;
  var slides = $scope.slides = [];
  var slidesEx = $scope.slidesEx = [];
  var currIndex = 0;

  $scope.addSlide = function() {
    $scope.slides = [
    {
      image: 'img/villaRoom.jpg'
    },
    {
      image: 'img/villaRoom2.jpg'
    },
    {
      image: 'img/villaRoom3.jpg'
    }
    ];
  };

  $scope.addSlideEx = function() {
    $scope.slidesEx = [
    {
      image: 'img/experiences3.jpg'
    },
    {
      image: 'img/experiences2.jpg'
    },
    {
      image: 'img/experiences1.jpg'
    }
    ];
  };


  $scope.randomize = function() {
    var indexes = generateIndexesArray();
    assignNewIndexesToSlides(indexes);
  };

  for (var i = 0; i < 4; i++) {
    $scope.addSlide();
    $scope.addSlideEx();
  }

  // Randomize logic below

  function assignNewIndexesToSlides(indexes) {
    for (var i = 0, l = slides.length; i < l; i++) {
      slides[i].id = indexes.pop();
    }
  }

  function generateIndexesArray() {
    var indexes = [];
    for (var i = 0; i < currIndex; ++i) {
      indexes[i] = i;
    }
    return shuffle(indexes);
  }

  // http://stackoverflow.com/questions/962802#962890
  function shuffle(array) {
    var tmp, current, top = array.length;

    if (top) {
      while (--top) {
        current = Math.floor(Math.random() * (top + 1));
        tmp = array[current];
        array[current] = array[top];
        array[top] = tmp;
      }
    }

    return array;
  }

  $scope.toggleMenu = function() {
    if($('.secondMenu').hasClass('removeDisplay')) {
      $('.secondMenu').slideDown(300, function() {}).removeClass('removeDisplay');
    } else {
      $('.secondMenu').slideUp(300, function() {
        $('.secondMenu').addClass('removeDisplay');
      });
    }

  }

});
