<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="./js/global.js"></script>
  
  <title>ASA Home Page</title>
</head>
<body>
  <div class="header">
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="./images/ASA_logo.jpg" alt="ASA LOGO" id="asa_logo">
          African <br> Student <br> Association 
        </a>
      </div>

      <div class="toggle">
        <a href="#">
          <img src="./images/nav-icon.png" alt="nav icon" id="navIcon" width="40px" height="40px">
        </a>
      </div>
      <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about_us.html">About Us</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="e_board.html">E-Board</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <div class="image_display">
    <div class="overlay"></div>
    <h2>African Student Association</h1>
    <button onClick="location.href='gallery.html'"><b>Gallery</b></button>
   
  </div>

  <!-- <div class="quotes-wrapper">
    <div class="quotes">
      <blockquote class="quote-text">
        "As an alum of the African Student Association, I can confidently say that being part of this 
        organization was not just a means of cultural exploration, but a platform for lifelong friendships 
        and personal growth. The ASA provided a space for us to celebrate our diverse backgrounds and to embrace 
        the unique perspectives that we each brought to the table. Through the ASA, I not only learned about the 
        rich history and traditions of my fellow African brothers and sisters, but also gained valuable leadership 
        skills and a deeper understanding of the importance of community and collaboration".
      </blockquote>
    </div>
  </div> -->


  <?php
    include 'quotes.php';
  ?>

  <div class="footer">
    <div id="footer_left">
        <p>Call us: 715-836-3367</p>
        <p>Email: <a id="email" href="mailto:chanc95@uwec.edu" target="_nl">chanc95@uwec.edu</a></p>
    </div>

    <div id="footer_right">
      <a href="https://www.facebook.com/ASAEauClaire?mibextid=LQQJ4d " target="_blank">
        <img src="./images/facebook_icon.png" alt="Facebook Icon" width="30px" height="30px" id="facebook_logo">
      </a>

      <a href="https://instagram.com/uwec_asa?igshid=YmMyMTA2M2Y=" target="_blank" >
        <img src="./images/instagram_icon.png" alt="Instagram Icon" width="30px" height="30px" id="instagram_logo">
      </a>
    </div>
  </div>

  <script src="./js/index.js"></script>
</body>
</html>