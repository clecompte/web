$(document).ready(function(){  
  $("pre").mouseover(function() {
    $(this).addClass("pre_hover");
  }).mouseout(function() {
    $(this).removeClass("pre_hover");
  });
});