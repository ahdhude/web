


$(document).ready(function(){

  $('.Atoll-select').on('change',function(){

    var AtollId = $(this).val();

    if(AtollId){

      $.ajax({
        type:'POST',
        url:'php/island_load.php',
        data:'AtollId='+AtollId,
        success:function(html){
        $('.Island-select').html(html);

        }

      });

    }else
      {
        $('.Atoll-select').html('<option value="">Select Atoll first</option>');

      }

});
});
