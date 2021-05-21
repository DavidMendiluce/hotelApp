<!doctype html>
<html ng-app="ui.bootstrap.demo" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Hotel Single Page App</title>
    <style>
    </style>
    <script data-require="angular.js@1.4.8" data-semver="1.4.8" src="https://code.angularjs.org/1.4.8/angular.js"></script>
  <script data-require="angular-route@*" data-semver="1.4.8" src="https://code.angularjs.org/1.4.8/angular-route.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@300;400&display=swap" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>
  <body>

  <div id="mainPageContainer">
    <nav class="">
      <ul class="d-flex justify-content-between" id="mainNav">
        <li class="nav-item">
          <a ng-controller="CarouselDemoCtrl" ng-click="toggleMenu()" id="navMenu"><span>Menu</span></a>
        </li>
        <li class="nav-item">
          <a href="index.php" id="navLogo"><span>
            <img  id="logoWhite" src="img/hotelLogoNoText.png"/>
            <img class="makeHidden" id="logoBlack" src="img/hotelLogoNoTextBlack.png"/>
            <h1 id="navTitle">HOTEL VILLA PASTOR</h1>
          </span></a>
        </li>
        <li class="nav-item">
          <button id="navBooking"><a href=""><span class="d-flex justify-content-center">Booking</span></a></button>
        </li>
      </ul>
      <ul class="secondMenu d-flex justify-content-between removeDisplay">
        <li class="nav-item">
          <a href="#hotelIntroContainer" ><span>Hotel</span></a>
        </li>
        <li class="nav-item">
          <a href="#roomsContainer" ><span>Rooms</span></a>
        </li>
        <li class="nav-item">
          <a href="#restaurantContainer" ><span>Restaurant</span></a>
        </li>
        <li class="nav-item">
          <a href="#experiencesContainer" ><span>Experiences</span></a>
        </li>
        <li class="nav-item">
          <a href="#spaContainer" ><span>Spa</span></a>
        </li>
        <li class="nav-item">
          <a href="#contactContainer" ><span>Contact</span></a>
        </li>
      </ul>
    </nav>

    <div id="hotelIntroContainer" class="layerContainer">
      <div class="descriptionContainerImg">
        <div class="titleContainer d-flex justify-content-center">
        <h1>VILLA PASTOR</h1>
       </div>
        <div class="textContainer">
        <p>Hotel Villa Pastor is designed to completely immerse
          you in the world of the surrounding forest, serving as a
          luxurious retreat in the middle of dense flora, delightful
          fauna and stunning views.
          The lodge’s rooms are spread
          out across three different floors,
          all of them designed with floor-to-ceiling windows.</p>
        </div>
      </div>
      <div class="containerImg">
      </div>
    </div>


    <div ng-controller="CarouselDemoCtrl" id="roomsContainer" class="layerContainer">
      <div class="descriptionContainerCarousel">
        <div class="titleContainer d-flex justify-content-center">
        <h1>GALUA ROOMS</h1>
       </div>
        <div class="textContainer">
        <p>The 20 Galua rooms all cover a generous 34 square meters (366 square feet). 13 Galua Twin Rooms have two full-size beds, with three rooms located at the end of the northwestern wing (next to the outside terraces) and the rest along the southeastern wing. 7 Galua King Rooms (of the 20 Wayras) feature king-size beds. For families or groups of friends, three pairs of Galua Rooms inter-connect, two pairs on the second floor and one pair on the ground floor, each one with a king-size bed connected to a room with two full-size beds.</p>
        </div>
      </div>
      <div class="containerCarousel">
        <div uib-carousel interval="myInterval">
          <div uib-slide ng-repeat="slide in slides" active="active" index="$index">
            <img ng-src="{{slide.image}}" style="margin:auto;" />
            <div class="carousel-caption">
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="restaurantContainer" class="layerContainer">
      <div class="descriptionContainerImg">
        <div class="titleContainer d-flex justify-content-center">
        <h1>RESTAURANT</h1>
       </div>
        <div class="textContainer">
        <p>The Loungue Dining Room is two-stories high and serves as a spectacular space for a lively gourmet experience. Mashpi’s chefs draw inspiration from the diversity of Ecuador’s cuisine and ingredients, making the most of the Lodge’s location between the coast and the Andes and providing guests with the best of both worlds.</p>
        </div>
      </div>
      <div class="containerImg">

      </div>
    </div>

    <div ng-controller="CarouselDemoCtrl" id="experiencesContainer" class="layerContainer">
      <div class="descriptionContainerCarousel">
        <div class="titleContainer d-flex justify-content-center">
        <h1>EXPERIENCES</h1>
       </div>
       <br>
        <div class="textContainer">
          <br>
        <h2>- &nbsp SURFING</h2>
        <p>San Cristobal Island in
          the Galapagos offers amazing places
          to surf like Puerto Chino beach, Tongo reef,
          el Cañon, and Punta Carola.</p>
          <h2>- &nbsp CLIMBING</h2>
          <p>Ecuador has 27 potentially active volcanoes,
            which provide the perfect terrain for mountain
            climbing like the Pichincha Volcano.</p>
            <h2>- &nbsp PARAGLIDING</h2>
            <p>Experience a unique view of the Yahuarcocha
              Lagoon on this 15-minute paragliding tour.
              Fly through the air and get a bird's-eye
              view of this beautiful place..</p>
        </div>
      </div>
      <div class="containerCarousel">
        <div uib-carousel interval="myInterval">
          <div uib-slide ng-repeat="slide in slidesEx" active="active" index="$index">
            <img ng-src="{{slide.image}}" style="margin:auto;" />
            <div class="carousel-caption">
            </div>
          </div>
        </div>

  </div>
    </div>

    <div id="spaContainer" ¡ class="layerContainer">
      <div class="descriptionContainerImg">
        <div class="titleContainer d-flex justify-content-center">
        <h1>SPA</h1>
       </div>
        <div class="textContainer">
        <p>Two massage rooms await on the 2nd floor of the lodge for a wide
          variety of beauty and body treatments, including single or couples massages.
          All of these treatments are expertly executed by the hands of our talented spa staff.</p>
        </div>
      </div>
      <div style="background: url('img/spa.jpg'); background-size: cover" class="containerImg">
      </div>
    </div>

    <div id="contactContainer" class="layerContainer">
      <div class="container rounded mt-5 mb-5">
          <div class="row justify-content-center">
              <div class="col-md-5">
                  <div class="p-3 py-5 containerForm">
                      <div class="d-flex justify-content-center align-items-center mb-3">
                          <h1 class="text-center">Contact</h1>
                      </div>
                      <div class="row inputsRow">

                          <div class="col-md-6"><input id="firstName" type="text" class="form-control" placeholder="FIRST NAME" value=""></div>
                          <div class="col-md-6"><input id="surname" type="text" class="form-control" value="" placeholder="LAST NAME"></div>


                          <div class="col-md-6"><input id="phoneNumber" type="text" class="form-control" placeholder="EMIAL" value=""></div>
                          <div class="col-md-6"><input id="address" type="text" class="form-control" placeholder="PHONE NUMBER" value=""></div>

                          <div class="col-md-12">
                             <textarea placeholder="MESSAGE" class="form-control" id="message" rows="3"></textarea>
                           </div>

                  </div>
                         <div class="text-left btnSend"><button type="button">Send</button></div>
              </div>
          </div>
      </div>
      </div>
      <div class="imageConcatctContainer1">

      </div>
      <div class="imageConcatctContainer2">

      </div>
      </div>

      <div class="footer">
        <p class="d-flex justify-content-end">David Marcos Mendiluce</p>

      </div>

  </div>
    <!-- JavaScripts -->

    <!--JQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- angularjs scripts-->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-animate.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/myapp.js"></script>
    <script src="js/controllers/CarouselDemoCtrl.js"></script>
    <script src="js/angular-datatables.min.js"></script>
    <script src="js/ui-bootstrap-tpls-2.5.0.min.js"></script>


  </body>
</html>
