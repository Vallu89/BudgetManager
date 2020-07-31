$(document).ready(function(){
    $(".dropdown").slideUp(0);
    $("#period").hover(function(){
        $(".dropdown2").slideUp(0); 
        $(".dropdown", this).slideDown(100);
    }, function(){
      $(".dropdown", this).stop().slideUp(100);
    });
    $("#betweenDates").hover(function(){
        $(".dropdown2", this).slideDown(100);
      }, function(){
        $(".dropdown2", this).stop().slideUp(100);
      });
  })