$(document).ready(function () {

  //rgba(247, 242, 238,1)

  $(document).scroll(function () {
   if ($(this).scrollTop() > 200) {
      $('#mainNav').animate({
                'background-color': 'rgba(247, 242, 238,1)'
              }, {duration: 500, queue: false}, function() {


            });
      $('#navTitle').fadeOut(500).animate({
                'top': '-50vh',
                'opacity': '0'
              }, {duration: 500, queue: false}, function() {


            });


            window.setTimeout(function() {
              $('#logoWhite').addClass('makeHidden');
              $('#logoBlack').removeClass('makeHidden');
              $('#logoBlack').addClass('makeVisible');
              $('#logoWhite').removeClass('makeVisible');
            }, 600);


            $('#navMenu').css('color', 'rgba(83, 83, 83,1)');
            $('.secondMenu').css('background-color', 'rgba(248, 248, 248)');
            $('.secondMenu a').css('color', 'rgba(43, 43, 43,1)');

   }
   if ($(this).scrollTop() < 200) {
     $('#mainNav').animate({
               'background-color': 'rgba(247, 242, 238,0)'
             }, {duration: 500, queue: false}, function() {


           });
           $('#navTitle').fadeIn(500).animate({
                     'top': '-20vh',
                     'opacity': '1',
                     'display': 'block'
                   }, {duration: 500, queue: false}, function() {


                 });

                 window.setTimeout(function() {
                   $('#logoBlack').removeClass('makeVisible');
                   $('#logoBlack').addClass('makeHidden');
                   $('#logoWhite').removeClass('makeHidden');
                   $('#logoWhite').addClass('makeVisible');
                 }, 600);


                 $('#navMenu').css('color', 'white');
                 $('.secondMenu').css('background-color', 'transparent');
                 $('.secondMenu a').css('color', 'white');

   }
});

});
