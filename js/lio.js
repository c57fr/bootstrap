$(document).ready(function() {
  
  $(function() {
    $(".fa").click(function() {
      $(".collapse").collapse($(this).attr("id"));
    });
    $('.collapse')
    .on("shown.bs.collapse", function () {
      $('.badge').text('"Contenu" affiché')
    })
    .on("hidden.bs.collapse", function () {
      $('.badge').text('"Contenu" caché')
    });
  });

  $("#pourFermerPremierSujet").click();
  $("#pourCloseCollapseOne").click();
  

  // Il existe aussi show.bs.collapse, hide.bs, et hiden.bs.collapse
  $("#bcontenu").on("shown.bs.collapse", function() {
    $("#apresCoup").toggle(3000);
  });

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

  $("#demo").on("hide.bs.collapse", function() {
    $(".btndemo").html('<span class="fa fa-angle-down"></span> Ouvrir');
  });
  $("#demo").on("show.bs.collapse", function() {
    $(".btndemo").html('<span class="fa fa-angle-up"></span> Fermer');
  });
});
