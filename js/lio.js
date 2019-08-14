$(document).ready(function() {
  var aff = $(".btnaff"),
    eff = $(".btneff"),
    lio = $(".lio");

  eff.click(function() {
    eff.addClass("d-none");
    aff.removeClass("d-none").fadeIn(3000);
    lio.css("background-color", "cornsilk").fadeOut(3000);
  });

  aff.click(function() {
    aff.addClass("d-none");
    eff.removeClass("d-none");
    lio
      .css("color", "white")
      .fadeIn(3000)
      .css("background-color", "maroon")
      .fadeIn(3000);
  });
  eff.click();
  aff.click();
});
