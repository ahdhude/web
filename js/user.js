$( window ).on( "load", function() {
//hides when form loads
$('.upload-form').hide();


   // SELECTS THE NAV BUTTON WHEN CLICKED

   $('.icon-bar').on('click', 'a', function () {

          if (this.text=='Upload') {
            //change class so know which one is selected
              $(".active").attr('class', '');
              $(this).addClass("active");
              $('#requests').hide();
              $('.book-form').hide();
              $('.upload-form').css("visibility","");
              $('.upload-form').show();



          }else {
            //change class so know which one is selected
            $(".active").attr('class', '');
            $(this).addClass("active");
            $('#requests').show();
            $('.book-form').show();
              $('.upload-form').hide();
            $('.upload-form').css("visibility","hidden");


          }
      });

});
