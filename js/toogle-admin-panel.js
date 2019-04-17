$(document).ready(function() {
  $(".adminNav li a").click(function(e) {
    e.preventDefault();
    $(".toggle").hide();
    var toShow = $(this).attr("href");
    $(toShow).show();
  });
});
