$(document).ready(function(){
  
  $('.claimedRight').each(function (f) {

      var newstr = $(this).text().substring(0,20);
      $(this).text(newstr);

    });
})