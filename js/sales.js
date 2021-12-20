$(document).ready(function () {
  $(document).on("submit", "#salesForm", function () {
    // Add sales transaction
    $.ajax({
      method: "POST",
      url: "php/addsales.php",
      data: $(this).serialize(),
      success: function (data) {
        alert("Transaction Added");
      },
    });
  });
});
