
/* Mobile Responsiveness */
function adjust_window() {

  console.log(window.visualViewport.width)

  if(window.visualViewport.width > 1200) {
    // Global
    $(".content").css("padding", "60px 90px");

    // Editor's note
    $(".editors_note_body").css("display", "flex")
    $(".editors_note_body").css("flex-direction", "row")
    $(".editors_note_art").css("justify-content", "center")
    $(".editors_note_art").css("margin-bottom", "0px")

    5



  } else if(window.visualViewport.width <= 1200) { 
    // Global
    $(".content").css("padding", "60px 70px");

    // Editor's note
    $(".editors_note_text").css("margin", "auto 20px");
    $(".editors_note_body").css("display", "flex")
    $(".editors_note_body").css("flex-direction", "column")
    $(".editors_note_art").css("margin-bottom", "40px");
    

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