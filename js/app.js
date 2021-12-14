// Used a lot of code demonstrated on this site. Great tutorial on AJAX/jQuery
// https://code.tutsplus.com/tutorials/how-to-use-ajax-in-php-and-jquery--cms-32494

$(function () {
  $("#productSelect").change(function () {
    var val = $(this).val();

    if (val == "") {
      $("#editProductInfo").html("");
    } else {
      $.ajax({
        type: "GET",
        url: "php_action/doGetProductData.php?productSelect=" + val,
      }).then(function (res) {
        $("#editInventoryForm").html(res);
      });
    }
  });

  $("#editInventoryForm").submit(function (event) {
    event.preventDefault();

    let alertError = $("#alertError"),
      alertSuccess = $("#alertSuccess");

    alertError.addClass("d-none");
    alertSuccess.addClass("d-none");

    $.ajax({
      type: "POST",
      url: "php_action/doSetProductData.php",
      data: $(this).serialize(),
    }).then(function (res) {
      if (res == "error") {
        alertError.removeClass("d-none");
      }
      if (res == "success") {
        alertSuccess.removeClass("d-none");
      }
    });
  });

  $(".alertClose").click(function () {
    let parentDiv = $(this).parent("div.alert");
    parentDiv.addClass("d-none");
  });

  $("#appLoginForm").submit(function (event) {
    event.preventDefault();

    let alertError = $("#alertError"),
      alertSuccess = $("#alertSuccess");

    alertError.addClass("d-none");
    alertSuccess.addClass("d-none");

    $.ajax({
      type: "POST",
      url: "php_action/doLogin.php",
      data: $(this).serialize(),
    }).then(function (res) {
      if (res == "error") {
        alertError.removeClass("d-none");
      } else {
        location.href = "showInventory.php";
      }
    });
  });

  $("#appLogoutForm").submit(function (event) {
    event.preventDefault();

    $.ajax({
      type: "POST",
      url: "php_action/doLogout.php",
    }).then(function (res) {
      location.href = "index.php";
    });
  });

  $("#createUserForm").submit(function (event) {
    event.preventDefault();
    let alertError = $("#alertError"),
      alertSuccess = $("#alertSuccess");

    alertError.addClass("d-none");
    alertSuccess.addClass("d-none");

    $.ajax({
      type: "POST",
      url: "php_action/doCreateUser.php",
      data: $(this).serialize(),
    }).then(function (res) {
      console.log(res);
      if (res == "error") {
        alertError.removeClass("d-none");
      } else {
        alertSuccess.removeClass("d-none");
      }
    });

    $("#createUserForm").each(function () {
      this.reset();
    });
  });

  $("#removeUserForm").submit(function (event) {
    event.preventDefault();
    let val = $("#userSelect option:selected").text();
    console.log(val);

    let alertError = $("#alertError"),
      alertSuccess = $("#alertSuccess");

    alertError.addClass("d-none");
    alertSuccess.addClass("d-none");

    $.ajax({
      type: "POST",
      url: "php_action/doRemoveUser.php",
      data: $(this).serialize(),
    }).then(function (res) {
      console.log(res);
      if (res == "success") {
        alertSuccess.removeClass("d-none");
      }
    });

    $("#userSelect option:selected").each(function () {
      $(this).remove();
    });
  });
});
