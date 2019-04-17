// Delete user

$(document).ready(function() {
  $(".delete-post").click(function(e) {
    var id = $(this).data("id");
    //alert(id);
    $.ajax({
      method: "POST",
      url: "php/ajax-delete-post.php",
      //dataType: "json",
      data: {
        id: id
      },
      success: function(podaci) {
        // alert(podaci);

        $(e.target)
          .parent()
          .parent()
          .hide();

        alert("Successfully deleted!");
      },
      error: function(xhr, statusTxt, error) {
        alert(error);
        alert(statusTxt);

        var status = xhr.status;
        switch (status) {
          case 500:
            alert("Server error. Role can not be deleted at the moment");
            break;
          case 404:
            alert("Page can't be found");
            break;
          default:
            alert("Error: " + status + " - " + statusTxt);
            break;
        }
      }
    });
  });
});
