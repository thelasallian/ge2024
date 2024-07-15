<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
  <title>The LaSallian - House of cards</title>
  <link rel="icon" type="image/x-icon" href="./public/assets/logos/tls-star-white.svg">
  
  <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>
  <!-- House of cards landing page -->
  <div class="landing background">
    <div class="landing content">
      <?php include('./components/navbar.php'); ?>
      <div class="landing title">
        <div class="landing main_title">House of <br> cards</div>
        <div class="landing sub_title">&nbsp;General Elections Special 2024</div>
      </div>
    </div>
  </div>

<!-- Homepage main content -->
  <div class="homepage background">
    <div class="homepage content">
      <?php
        $sticky_class = "sticky_navbar"; 
        include('./components/navbar.php'); 
      ?>

      <!-- Editor's note -->
      <div class="editors_note">
        <div class="editors_note_title">
          <div class="editors_note_title_text">Editor's Note</div>
          <div class="editors_note_hr"><hr></div>
        </div>
        <div class="editors_note_body">
          <img class="editors_note_art" src="./public/assets/art/editors_note_art.png" alt="Editor's Note Art" title="Editor's Note Art" draggable="false">
          <div class="editors_note_text">
            Lorem ipsum dolor sit amet consectetur. Velit risus felis adipiscing vitae. Pulvinar sagittis cursus sed tristique. Augue praesent pellentesque iaculis pellentesque ut. Massa justo nibh non neque feugiat. Sit vestibulum tortor sagittis morbi. Integer vestibulum augue morbi euismod volutpat fames venenatis cursus. Sem auctor tincidunt facilisi auctor viverra rutrum netus tempus. Pulvinar volutpat non vestibulum diam. Convallis odio auctor massa in. Nullam facilisi pellentesque nunc sagittis.
            Nisl a commodo rutrum porttitor odio dictumst phasellus ut id. Quis et tempor vitae pharetra. Tristique varius nibh elit enim nec. Praesent purus interdum risus aliquet justo. Tempus malesuada enim aliquam purus eget. A malesuada nisl eu mattis ut id pellentesque est. Eget elementum sed sagittis in semper facilisis ullamcorper. Vel volutpat quis maecenas cursus interdum. Sit enim dui suspendisse odio pellentesque vulputate non lobortis vitae. Eget amet elit mollis aliquam tellus nulla. Aliquet in vitae mauris rhoncus tincidunt amet cum tempus hendrerit.
          </div>
        </div>
        <div class="editors_note_author">Carl Joshua Mamuri <br> <div class="editors_note_author position">University Editor</div></div>        
      </div>
      
      <!-- Featured -->
      <?php  
        $file_content = file_get_contents("./json/articles.json");
        $articles = json_decode($file_content, TRUE);

        $featured_img = $articles["articles"][0]["data"]["img"];
        $featured_title = $articles["articles"][0]["data"]["title"];
        $featured_tag = $articles["articles"][0]["data"]["tag"];
        $featured_desc = $articles["articles"][0]["data"]["desc"];
      ?>

      <div class="featured">
        <img class="featured_img" src="<?php echo $featured_img?>" alt="<?php echo $featured_title?>" title="<?php echo $featured_title?>" draggable="false">
        <div class="featured_details">
          <div class="featured_tag"><?php echo $featured_tag?></div>
          <div class="featured_title"><?php echo $featured_title?></div>
          <div class="featured_desc"><?php echo $featured_desc?></div>
        </div>
      </div>

      <!-- Article list (postponed) -->
      <!-- <div class="articles">
        <div class="articles_title">
          <div class="articles_title_text">Articles</div>
          <div class="articles_title_view_all_btn">View All</div>
        </div>
        <div class="articles_carousel">
          <?php
            $article_card_img_src = "./public/assets/article_card_img/women_lead_usg_amid_misogyny.jpg";
            $article_card_title = "On the microscale: Women lead USG amid widespread misogyny";
            $article_card_tag = "PULSE";
            include('./components/article_card.php'); 

            $article_card_img_src = "./public/assets/article_card_img/are_student_councils_faltering.jpg";
            $article_card_title = "Are student councils faltering?";
            $article_card_tag = "COMMENTARY";
            include('./components/article_card.php');

            $article_card_img_src = "./public/assets/article_card_img/is_the_usg_overstaffed_or_underutilized.jpg";
            $article_card_title = "Is the USG overstaffed or underutilized?";
            $article_card_tag = "COMMENTARY";
            include('./components/article_card.php');
          ?>
        </div>
      </div> -->

      <!-- Vox populi -->
      <div class="voxpopuli">
        <div class="voxpopuli_title_text">Vox Populi</div>
        <div class="voxpopuli_question">
          What is the most notable USG policy or project that you remember?
        </div>
        <div class="voxpopuli_button">
          View Vox Populi →
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="footer background">
      <div class="footer_content">
        <div class="footer_website_details">
          <img class="footer_logo" src="./public/assets/logos/tls-star-white.svg" alt="The LaSallian" title="The LaSallian" draggable="false"/>
          <div class="footer_org_desc">
            <span class="bold">The LaSallian</span> is the official student publication of De La Salle University. It is of the students, by the students, and for the students. Our student writers, photographers, videographers, artists, and web managers are committed to the 63-year tradition of journalistic excellence and issue-oriented critical thinking.
          </div>
          <div class="credits">
            <span class="italicize">Website by</span> <span class="bold">Patrick James Marcellana & Ramon Enrico Martinez</span><br>
            <span class="italicize">Graphics by</span> <span class="bold">Maxine Lee</span>
          </div>
        </div>
        <div class="footer_extra">
          <div class="footer_socials">
            <a class="footer_socials_icon" href="https://x.com/thelasallian">
              <img class="footer_socials_x footer_socials_icon" src="./public/assets/icons/x_logo.png" alt="X - The LaSallian" title="X - The LaSallian" draggable="false" />
            </a>
            <a class="footer_socials_icon" href="https://facebook.com/thelasallian">
              <img class="footer_socials_icon footer_socials_fb" src="./public/assets/icons/facebook_logo.svg" alt="Facebook - The LaSallian" title="Facebook - The LaSallian" draggable="false" />
            </a>
            <a class="footer_socials_icon" href="https://instagram.com/thelasallian">
              <img class="footer_socials_icon footer_socials_ig" src="./public/assets/icons/ig_logo.png" alt="Instagram - The LaSallian" title="Instagram - The LaSallian" draggable="false" />
            </a>
            <a class="footer_socials_icon" href="https://t.me/thelasallian">
              <img class="footer_socials_tg footer_socials_icon" src="./public/assets/icons/tg_logo.png" alt="Telegram - The LaSallian" title="Telegram - The LaSallian" draggable="false" />
            </a>
          </div>
          <div class="footer_copyright">
            © 2024 The LaSallian
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>