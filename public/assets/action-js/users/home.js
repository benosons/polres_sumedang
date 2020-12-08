console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('ul.sf-menu > li.selected').removeClass('selected');
  $('#menu-home').addClass('selected');
});
