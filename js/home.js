


//slider function
	function cycleImages(){
      var $active = $('#carosel .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#carosel img:first');

      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(100,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }


    $(function(){
		var slideCount=$('#carosel ul li').length;
		var slideWidth=$('#carosel ul li').width;
		var slideHeight=$('#carosel ul li').height;
		var sliderUlWidth=slideCount*slideWidth;

		$('#carosel').css({
	        width: slideWidth,
	        height: slideHeight
	    });

	    $('#carosel ul').css({
	        width: sliderUlWidth,
	        marginLeft: -slideWidth
	    });

	    $('#carosel ul li:last-child').prependTo('#carosel ul');

		 function moveLeft() {
	        $('#carosel ul').animate({
	            left: +1000

	        }, 100, function () {
	            $('#carosel ul li:last-child').prependTo('#carosel ul');
	            $('#carosel ul').css('left', '');
	        });


	    };


		function moveRight() {
	        $('#carosel ul').animate({
	            left: -1000
	        }, 100, function () {
	            $('#carosel ul li:first-child').appendTo('#carosel ul');
	            $('#carosel ul').css('left', '');
	        });
		};




		$('#nav-left').click(function () {
	        moveRight();
	    });

		$('#nav-right').click(function () {
	        moveLeft();
	    });

	});






$( document ).ready(function() {




	//SLIDER THINGY
	setInterval('cycleImages()', 5000);



	//sMOOTH SCROOLLL

  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 100, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


	//function to stick navbar when scrolled
	window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    navbar.classList.add("sticky")
	  } else {
	    navbar.classList.remove("sticky");
	  }
	}




});



 $( window ).on( "load", function() {




 		// SELECTS THE NAV BUTTON WHEN CLICKED

         $(".PagesLink").children().on('click',function(e){

				$('.active').removeClass('active');
				 $( this.children ).addClass('active');
		  })







  });
