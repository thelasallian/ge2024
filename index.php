<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
  <title>The LaSallian - Beyond the Chambers</title>
  <link rel="icon" type="image/x-icon" href="./public/assets/logos/tls-star-white.svg">
  <link rel="stylesheet" href="./public/css/dist/index.css">
  <link rel="stylesheet" href="./public/css/dist/index.min.css">
  <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>
  <div class="landing background">
    <!-- <div class="landing content">
      <?php include('./components/navbar.php'); ?>
      <div class="landing title">
        <div class="landing main_title">Beyond the <br> chambers</div>
        <div class="landing sub_title">&nbsp;General Elections Special 2024</div>
      </div>
    </div> -->
    <svg class="blobCont">
		  <!-- <rect fill="white" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" /> -->
      <defs>
        <filter id="gooey" height="130%">
          <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        </filter>

      </defs>
			<!-- <mask id="mask" x="0" y="0"> -->
				<g style="filter: url(#gooey)">
          <circle class="blob" cx="10%" cy="10%" r="175" fill="white" stroke="white" />
					<circle class="blob" cx="50%" cy="10%" r="145" fill="white" stroke="white" />
					<circle class="blob" cx="17%" cy="15%" r="165" fill="white" stroke="white" />
					<circle class="blob" cx="90%" cy="20%" r="215" fill="white" stroke="white" />
					<circle class="blob" cx="30%" cy="25%" r="125" fill="white" stroke="white" />
          <circle class="blob" cx="50%" cy="60%" r="175" fill="white" stroke="white" />
					<circle class="blob" cx="70%" cy="90%" r="115" fill="white" stroke="white" />
					<circle class="blob" cx="90%" cy="60%" r="185" fill="white" stroke="white" />
					<circle class="blob" cx="30%" cy="90%" r="175" fill="white" stroke="white" />
          <circle class="blob" cx="10%" cy="10%" r="175" fill="white" stroke="white" />
					<circle class="blob" cx="50%" cy="10%" r="115" fill="white" stroke="white" />
					<circle class="blob" cx="17%" cy="15%" r="165" fill="white" stroke="white" />
					<circle class="blob" cx="40%" cy="20%" r="215" fill="white" stroke="white" />
					<circle class="blob" cx="30%" cy="25%" r="125" fill="white" stroke="white" />
          <circle class="blob" cx="80%" cy="60%" r="175" fill="white" stroke="white" />
					<circle class="blob" cx="17%" cy="10%" r="195" fill="white" stroke="white" />
					<circle class="blob" cx="40%" cy="60%" r="185" fill="white" stroke="white" />
					<circle class="blob" cx="10%" cy="50%" r="175" fill="white" stroke="white" />
				</g>
			<!-- </mask> -->
	</svg>
  </div> 
  <!--
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