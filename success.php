<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <script defer src="js/validation.js"></script>
    <title>pineapple.</title>
  </head>
  <style>
    @media(max-width:600px){
      body{
        background-image: url('img/image_summer.png');
        background-repeat: no-repeat;
        height: 100%;
        min-height: 500px;
      }
      .empty-space{
        display:none;
      }
      .first-half{
        display:initial;
      }
      .screen{
        display: none;
      }
      main{
        background-image: none;
        background-color: transparent;
        display: flex;
        flex-direction: column;
      }
      .secound-half{
        display: none;
      }
      .section-nav{
        display: flex;
        background-color: white;
        padding-top: 0vw;
      }
      .section-subscribe{
        margin-top: 12vh;
        padding-top: 3.6vh;
      }
      .section-nav .logo{
        flex: 2;
        padding: 3vw;
      }
      .section-nav .links{
        flex: 3;
        align-self: center;
      }
      .links li{
        margin:0;
        padding: 2vw;
        display:inline;
        list-style-type: none;
        font-family: Arial;
        font-size: 14px;
        color: #6A707B;
      }
      .links ul{
        white-space: nowrap;
        margin-top: 0;
      }
      .section-subscribe{
        background-color: white;
        align-self: center;
        padding:4vw;
        padding-top: 4vh;
        padding-bottom: 4vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 90%;
      }
      .sub-section-text h1{
        font-family: Georgia;
        font-weight: normal;
        font-size: 24px;
        color: #131821;
        padding-bottom: 1vh;
      }
      .sub-section-text p{
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        width:80%;
        line-height: 3vh;
        padding-bottom: 3vh;
        color: #6A707B;
      }
      .sub-section-input{
        width: 100%;
        height:auto;
      }
      .sub-section-input{
        position: relative;
      }
      .sub-section-input #check-email{
        position: relative;
        left: 0;
        box-sizing: border-box;
        background: #FFFFFF;
        border: 1px solid #E3E3E4;
        border-left: 4px solid #4066A5;
        width: 100%;
        height: 60px;
      }
      .sub-section-input #check-email:focus{
        outline: none;
      }
      .sub-section-input #check-email[type="text"]{
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        color: #6A707B;
        padding-left: 3vw;
      }
      .sub-section-input #img-submit{
        position: absolute;
        width: 25px;
        top: 16%;
        right: 5%;
        height: auto;
      }
      #img-submit:focus{
        outline: none;
      }
      .terms{
        padding-top: 0vh;
        padding-bottom: 3vh;
        display: flex;
        color: #6A707B;
        font-family: Arial;
        font-style: normal;
        font-weight: normal;
        font-size: 1em;
        align-items: center;
      }
      .terms p{
        padding-left: 3vw;
      }
      .terms a{
        color: black;
      }
      .terms input{
        width: 26px;
        height: 26px;
      }
      .sub-section-links{
        display: flex;
        justify-content: center;
        flex-basis: 60%;
      }
      .sub-section-links img{
        padding: 5px;
      }
      hr{
        padding-bottom: 2vh;
        border: 0;
        border-top: 1px solid #E3E3E4;
      }
    }
  </style>
  <body>
    <main>
      <div class="section-nav">
          <div class="logo">
            <a href="../index.php">
              <img class="first-half" src="img/logo.png" alt="">
              <img class="secound-half" src="img/logo_pineapple.png" alt="">
            </a>
          </div>
          <div class="links">
            <ul>
              <li><a class="db" style="text-decoration:none; color:#6A707B;" href="data.php">DataBase</a></li>
              <li>How it works</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
        <div class="section-subscribe" id="section-subscribe">
        <div>
            <img style="padding-bottom: 3vh;" src="img/prize.png" alt="">
            <div class="sub-section-text2">
                <h1>Thanks for subscribing!</h1>
                <p>You have successfully subscribed to our email listing.<br>Check your email for the discount code.</p>
            </div>
        </div>
          <hr>
          <div class="sub-section-links">
            <img src="img/facebook.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/youtube.png" alt="">
          </div>
        </div>
    </main>
    <div class="screen">
      <img src="img/image_summer.png" alt="">
    </div>
  </body>
</html>
