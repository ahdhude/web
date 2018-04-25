







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







 $( window ).on( "load", function() {




 		// SELECTS THE NAV BUTTON WHEN CLICKED

         $(".PagesLink").children().on('click',function(e){

				$('.active').removeClass('active');
				 $( this.children ).addClass('active');
		  })







  });
