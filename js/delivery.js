$(document).ready(function () {
  $(document).on("submit", "#deliveryForm", function () {
    // Add delivery transaction
    $.ajax({
      method: "POST",
      url: "php/adddelivery.php",
      data: $(this).serialize(),
      success: function (data) {
        alert("Transaction Added");
      },
    });
  });
});
