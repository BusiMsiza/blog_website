<?php 
  include("path.php");
  include(ROOT_PATH . "/app/controllers/topics.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/about.css">

  <title>Blog</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    

    <div class="hero" style="background-image: url('assets/images/lock.jpg')">
        
      
        <div class="content">
            <large>Want to know more about us?</large>
            <h4>Meet Our <br> cyber security team</h4>
            <button type="button">Take a tour </button>
            <p1>In cyber security whatever you do is neccessary work, the world of cyber crime and cyber security is constantly evolving.
                  one goal is to always stay ahead of criminals. The biggest reward is the feeling you get when you play a role in protecting people's livelihoods. 
                  We are passionate about helping you get all the informations you need about cyber crime thus getting you connected in any way possible. Scroll bellow to read more about our team.
              </p1>
            <!--<div>
                <h1>TWITTER</h1>
            </div>-->
        </div>
        <div class="bubbles">
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >
            <img src="assets/images/light.jpg" >

        </div>

    </div>

       
      <h2 style="text-align:center">Our Team</h2>

  <div class="row">
    <div class="column">
      <div class="card">
        <img src="assets/images/mxo.jpg" alt="Mxolisi" style="width:25px">
        <div class="container">
          <h2>Mxolisi</h2>
          <p class="title">Intern, Bankseta Cyber Security</p>
          <p>"Hacking involves a different way of looking at problems no one's thought of"
            ~.Walter O'Brien <br><br>interesting huh?<br></p>
          <p>mxo@standardbank.co.za</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="assets/images/b.jpg" alt="Busi" style="width:18px">
        <div class="container">
          <h2>Busi</h2>
          <p class="title">Intern, Bankseta Cyber Security</p>
          <p>"Your fragile mind can't have forggotten the terrifying technothriller series known 'Scorpion',
            because it features the worst hacking scenes ever broadcast in any medium"~Annalee Newitz.
          </p>
          <p>busi@standardbank.co.za</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="assets/images/c.jpg" alt="Ciddy" style="width:23px">
        <div class="container">
          <h2>Ciddy</h2>
          <p class="title">Intern, Bankseta Cyber Security</p>
          <p>"One of my favourite books about hackers is 'Masters of Deception', it is about this hacking group in the 1990s"~Harper Reed
            <br>oh well
          </p>
          ciddy@standardbank.co.za</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
</div>


 
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>




