<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
  <title>The LaSallian - Beyond the Chambers</title>
  <link rel="icon" type="image/x-icon" href="./public/assets/logos/tls-star-white.svg">
  
  <link rel="stylesheet" href="./public/css/index_1.css">
  <link rel="stylesheet" href="./public/css/dist/index.css">
</head>
<body>
  <div class="landing background">
    <div class="gooey">
      <div class="blobs">
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <!-- <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div>
        <div class="blob"></div> -->
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
      <defs>
        <filter id="gooey">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feBlend in="SourceGraphic" in2="goo" />
        </filter>
      </defs>
    </svg>
    <!-- <div class="landing content">
      <?php include('./components/navbar.php'); ?>
      <div class="landing title">
        <div class="landing main_title">Beyond the <br> chambers</div>
        <div class="landing sub_title">&nbsp;General Elections Special 2024</div>
      </div>
    </div>
  </div>
  <div></div>
  <div class="homepage background">
    <div class="editors_note content">
      <div class="editors_note_title">
        <div class="editors_note_title_text">Editor's Note</div>
        <div class="editors_note_hr"></div>
      </div>
      <div class="editors_note_body">
        <div class="editors_note_art"></div>
        <div class="editors_note_text">
          
        </div>
      </div>
      <div class="editors_note_author">Carl Joshua Mamuri <br> University Editor</div>
    </div>
    <div class="articles content">
      <div class="articles_title">
        <div class="articles_title_text">Articles</div>
        <div class="articles_title_view_all_btn">View All</div>
      </div>
      <div class="articles_carousel">
        <?php
          $article_card_img_src = "./public/assets/article_card_img/women_lead_usg_amclass_misogyny.jpg";
          $article_card_title = "On the microscale: Women lead USG amclass wclassespread misogyny";
          $article_card_tag = "PULSE";
          // include('./components/article_card.php'); 

          $article_card_img_src = "./public/assets/article_card_img/are_student_councils_faltering.jpg";
          $article_card_title = "Are student councils faltering?";
          $article_card_tag = "COMMENTARY";
          // include('./components/article_card.php');

          $article_card_img_src = "./public/assets/article_card_img/is_the_usg_overstaffed_or_underutilized.jpg";
          $article_card_title = "Is the USG overstaffed or underutilized?";
          $article_card_tag = "COMMENTARY";
          // include('./components/article_card.php');
        ?>
      </div>
    </div> -->
  </div>
</body>
</html>