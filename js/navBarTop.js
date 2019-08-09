/**
 * Scroll management
 */
$(document).ready(function() {
  // Define the menu we are working with

  // console.log("Début:", $(window).scrollTop(), " | ", $("nav").height());

  // var btnmenu = $("#mainbar :eq(2)"),
  var btnmenu = $("#btnmenu");

  // console.log(btnmenu, btnmenu.hasClass("collapsed"));
  var observclick = function() {
    var menuferme = $("nav").height();
    console.log("Menu collapsed: ", btnmenu.hasClass("collapsed"));
    $(this).css({ color: "red" });
    console.log("En fin: ", $(window).scrollTop(), menuferme);
    if ($(this).hasClass("collapsed")) {
      $("#contentgc7").css({ color: "orange", top: 240 });
    } else $("#contentgc7").css({ color: "GREEN", top: 40 });

    console.log("Nav HEIGHT", $("nav").height());
  };
  
  btnmenu.click();

  setTimeout(function() {
    btnmenu.click();
    console.log("Fini !");
  }, 1000);

  btnmenu.click(observclick);


  // Get the menus current offset
  // var origOffsetY = menu.offset().bottom;

  /**
   * scroll
   * Perform our menu mod
   */

  /*
    menuouvert = 240;

  $("#contentgc7").css({ color: "yellow", top: $("nav").height() });
  console.log($(window).scrollTop(), $("nav").height());

  document.onscroll = function() {
    var st = $(window).scrollTop();

    console.log($(window).scrollTop(), $("nav").height());

    if (st > $("nav").height()) {
      $("#contentgc7").css({ color: "blue", top: $("nav").height() });
      $("nav")
        .removeClass("static-top")
        .addClass("fixed-top");
    } else {
      $("#contentgc7").css({ color: "red", top: "40px" });
      $("nav")
        .removeClass("fixed-top")
        .addClass("static-top");
    }
  };
*/
  // Anytime the document is scrolled act on it
  // document.onscroll = scroll;
});
