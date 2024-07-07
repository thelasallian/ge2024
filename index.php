<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The LaSallian - Beyond the Chambers</title>
</head>
<body>
  <div id="landing">
    <?php include('./components/navbar.php'); ?>
    <div id="landing_title">
      <div id="landing_title_main_text">Beyond the Chambers</div>
      <div id="landing_title_sub_text">General Elections Special 2024</div>
    </div>
  </div>
  <div id="editors_note">
    <div id="editors_note_title">
      <div id="editors_note_title_text">Editor's Note</div>
      <div id="editors_note_hr"></div>
    </div>
    <div id="editors_note_body">
      <div id="editors_note_art"></div>
      <div id="editors_note_text">
        Lorem ipsum dolor sit amet consectetur. Velit risus felis adipiscing vitae. Pulvinar sagittis cursus sed tristique. Augue praesent pellentesque iaculis pellentesque ut. Massa justo nibh non neque feugiat. Sit vestibulum tortor sagittis morbi. Integer vestibulum augue morbi euismod volutpat fames venenatis cursus. Sem auctor tincidunt facilisi auctor viverra rutrum netus tempus. Pulvinar volutpat non vestibulum diam. Convallis odio auctor massa in. Nullam facilisi pellentesque nunc sagittis.
        Nisl a commodo rutrum porttitor odio dictumst phasellus ut id. Quis et tempor vitae pharetra. Tristique varius nibh elit enim nec. Praesent purus interdum risus aliquet justo. Tempus malesuada enim aliquam purus eget. A malesuada nisl eu mattis ut id pellentesque est. Eget elementum sed sagittis in semper facilisis ullamcorper. Vel volutpat quis maecenas cursus interdum. Sit enim dui suspendisse odio pellentesque vulputate non lobortis vitae. Eget amet elit mollis aliquam tellus nulla. Aliquet in vitae mauris rhoncus tincidunt amet cum tempus hendrerit.
      </div>
    </div>
    <div id="editors_note_author">Carl Joshua Mamuri <br> University Editor</div>
  </div>
  <div id="articles">
    <div id="articles_title">
      <div id="articles_title_text">Articles</div>
      <div id="articles_title_view_all_btn">View All</div>
    </div>
    <div id="articles_carousel">
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
  </div>
</body>
</html>