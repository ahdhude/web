







		 function moveLeft() {



	    };


		function moveRight() {



		};




		$('#nav-left').click(function () {
	        moveRight();
	    });

		$('#nav-right').click(function () {
	        moveLeft();
	    });








$( document ).ready(function() {







	//function to stick navbar when scrolled
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







 $( window ).on( "load", function() {




 		// SELECTS THE NAV BUTTON WHEN CLICKED

         $(".PagesLink").children().on('click',function(e){

				$('.active').removeClass('active');
				 $( this.children ).addClass('active');
		  })







  });
