$(function(){
  $('a[href^=#]').click(function(e){
    var name = $(this).attr('href').substr(1);
    var pos = $('a[name='+name+']').offset();
    $('body').animate({ scrollTop: pos.top });
    e.preventDefault();
  });
});