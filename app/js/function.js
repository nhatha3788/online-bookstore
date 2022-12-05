$(document).ready(function () {
  //   alert("hello");
  $(".menu-toggle").click(function () {
    // console.log($(".menu").css("display"));
    if ($(".menu").css("display") == "none") {
      $(".menu").css("display", "block");
    } else $(".menu").css("display", "none");
  });

  //   $(".menu-wrapper").click(function () {
  //     console.log("tstestsets");
  //   });

  $("#phoneBtn").on("click", function () {
    $("#phoneBackdrop").modal("show");
  });

  $("#emailBtn").on("click", function () {
    $("#emailBackdrop").modal("show");
  });
});
