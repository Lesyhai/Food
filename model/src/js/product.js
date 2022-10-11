// $(document).ready(function () {
//   $("#list").click(function (event) {
//     event.preventDefault();
//     $("#products .item").addClass("list-group-item");
//   });
//   $("#grid").click(function (event) {
//     event.preventDefault();
//     $("#products .item").removeClass("list-group-item");
//     $("#products .item").addClass("grid-group-item");
//   });
// });
$(document).ready(function () {
  $(".filter-button").click(function () {
    var value = $(this).attr("data-filter");

    if (value == "all") {
      $(".filter").show("1000");
    } else {
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
  });

  if ($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
  }
  $(this).addClass("active");
});