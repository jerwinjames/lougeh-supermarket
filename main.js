// Materialize Auto Initialization
M.AutoInit();

$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "php/getitems.php",
    dataType: "html",
    success: function (data) {
      $("#items").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getsuppliers.php",
    dataType: "html",
    success: function (data) {
      $("#suppliers").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getsales.php",
    dataType: "html",
    success: function (data) {
      $("#orders").html(data);
    },
  });

  $.ajax({
    type: "GET",
    url: "php/getcustomers.php",
    dataType: "html",
    success: function (data) {
      $("#customers").html(data);
    },
  });
});
