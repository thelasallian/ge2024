
/* Mobile Responsiveness */
function adjust_window() {

  if(window.visualViewport.width > 1200) {
    // Global
    $(".content").css("padding", "60px 90px");

    // Editor's note
    $(".editors_note_body").css("display", "flex")
    $(".editors_note_body").css("flex-direction", "row")



  } else if(window.visualViewport.width <= 1200) { 
    // Global
    $(".content").css("padding", "60px 70px");

    // Editor's note
    $(".editors_note_text").css("margin", "auto 20px");
    $(".editors_note_body").css("display", "initial")
    

  } else if(window.visualViewport.width <= 1024) {
    // Global
    $(".content").css("padding", "60px 65px"); 
  } else if(window.visualViewport.width <= 768) {


  } else if(window.visualViewport.width <= 480) {
  } else if(window.visualViewport.width <= 320) { 
  }
}

adjust_window();
window.onresize = adjust_window;