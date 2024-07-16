
/* Mobile Responsiveness */
async function adjust_window() {

  console.log(window.visualViewport.width)

  // Articles JSON
  const file = await fetch("./json/articles.json")
  const content = await file.json()

  if(window.visualViewport.width > 1200) {
    // Global
    $(".content").css("padding", "60px 90px");

    // Editor's note
    $(".editors_note_body").css("display", "flex")
    $(".editors_note_body").css("flex-direction", "row")
    $(".editors_note_art").css("justify-content", "center")
    $(".editors_note_art").css("margin-bottom", "0px")
  } else if(window.visualViewport.width <= 1200 && window.visualViewport.width > 1024) { 
    // Global
    $(".content").css("padding", "50px 70px");

    // Editor's note
    $(".editors_note_text").css("margin", "auto 20px");
    $(".editors_note_body").css("display", "flex")
    $(".editors_note_body").css("flex-direction", "column")
    $(".editors_note_art").css("margin-bottom", "40px");
    
    // footer
    $(".footer_content").css("padding", "50px 70px 60px 70px")

  } else if(window.visualViewport.width <= 1024 && window.visualViewport.width > 768) {
    // Global
    $(".content").css("padding", "50px 65px"); 

    // Editor's note
    $(".featured").html(`
      <div class="featured_details">
        <div class="featured_tag">${content.articles[0].data.tag}</div>
        <div class="featured_title">${content.articles[0].data.title}</div>
      </div>  
      <img class="featured_img" src="${content.articles[0].data.img}" alt="<?php echo $featured_title?>" title="<?php echo $featured_title?>" draggable="false">
      <div class="featured_desc">${content.articles[0].data.desc}</div>
    `)
    
    // footer
    $(".footer_content").css("padding", "50px 65px 50px 65px")
  } else if(window.visualViewport.width <= 768 && window.visualViewport.width > 480) {


  } else if(window.visualViewport.width <= 480 && window.visualViewport.width > 320) {
  } else if(window.visualViewport.width <= 320) { 
  }
}

adjust_window();
window.onresize = adjust_window;