

<html lang="en">
<head>

    <title>OraCare</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@700&display=swap" rel="stylesheet">
    <style>
    header{
    background: url(img/img2.jpg);
    background-size: cover;
    background-position: center;
    min-height: 1000px;
    }

    .registration_wrap{
      background: url('img/login.jpg');
      height: 700px;
      background-size: cover;
    background-position: center;
      
  }

  body{
    background-color:#eceff1 ;
  }

    </style>
</head>
<body>
    
<header>
    <nav class="nav-wrapper nav transparent z-depth-1">
            <a href="" class="brand-logo"><img class="logo_img" src="img/logo.png" alt=""></a>
            <ul class="right nav_row">
                <li><a class="black-text nav_op" href="">Sign Up</a></li>
                <li><a class="black-text nav_op" href=""></a></li>
                <li><a class="black-text nav_op" href="#con">Contact Us</a></li>
            </ul>
    </nav>

    <div class="container">
    <h1 class="banner cyan-text">YOUR OWN <br> STOMATOLOGIST</h1>
    <p>Lorem ipsum Nobis delectus rem nisi quo praesentium, so<br>luta ipsa porro eaque, dicta harum saepe rerum dolorem volu<br>orem ipsum Nobis delectus rem nisi quo praesentium, so<br>ptates eveniet iure modi, quibusdam maxime cum.</p>
</div>
<div class="container">
    <form action="" method="get">
        <button class="btn-large white-text black login_btn">LOGIN</button>
        <button class="btn-large light-blue darken-4 book_btn">BOOK A VISIT!</button>
    </form>
</div>

</header>

<div class="row" style="margin:40px; background-color:#eceff1 ";>
    <div class="col l3">
      <div class="card">
        <div class="card-image">
          <img src="img/img3.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">Checkup</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#"><button class="btn light-blue darken-4 card-btn">BOOK</button></a>
        </div>
      </div>
    </div>



    <div class="col l3">
      <div class="card">
        <div class="card-image">
          <img src="img/img6.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">Breezy Braces</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <a href="#"><button class="btn card-btn light-blue darken-4">BOOK</button></a>
        </div>
      </div>
    </div>


    <div class="col l3">
      <div class="card">
        <div class="card-image">
          <img src="img/img5.jpg">
        </div>
        <div class="card-content">
        <span class="card-title">Cosmetic</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <a href="#"><button class="btn card-btn light-blue darken-4">BOOK</button></a>
        </div>
      </div>
    </div>


    <div class="col l3">
      <div class="card">
        <div class="card-image">
          <img src="img/img4.jpg">
        </div>
        <div class="card-content">
          <span class="card-title">Procedures</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
        <a href="#login"><button class="btn card-btn light-blue darken-4">BOOK</button></a>
        </div>
      </div>
    </div>
  </div>


  <div class="registration_wrap">
  <div class="container">
      <div class="row">
          <div class="col reg_col l4">
              <ul class="tabs">
                  <li class="tab col l6"><a class="black-text" href="#login">LOGIN</a></li>
                  <li class="tab col l6"><a class="black-text" href="#signup">SIGN-IN</a></li>
              </ul>
              <div class="col l12 register" id="login">
                    <h5 class="center" style="font-family: 'Work Sans', sans-serif; margin-top:20px;">Log into existing account</h5>
                <form class="login_form" action="/" method="POST">
                    @csrf
                    <input type="text" name="user_name">
                    <label for="user_name">Enter your Username</label>
                    <input type="password" name="password">
                    <label for="password">Enter your Password</label><br>
                    <button class="btn form_btn1" type="submit">Login</button>
                    <button class="btn form_btn2" type="button">Forgot password</button>
                </form>

              </div>
              <div class="col l12 register" id="signup">
              <h5 class="center" style="font-family: 'Work Sans', sans-serif; margin-top:20px;">Create a new account</h5>
                <form action="/" method="POST">
                    @csrf
                    <input type="text" id="user" name="user_name">
                    <label for="user">Enter a Username</label>
                    <input type="password" id="pass" name="password">
                    <label for="pass">Enter a Password</label><br>
                    <input type="password" id="repas" name="re_pass">
                    <label for="repas">Enter your Password again</label><br>
                    <input type="text" id="ph" name="phone">
                    <label for="ph">Enter your Phone number</label><br>
                    <button class="btn form_btn3" type="submit">Register</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="row" style="background-color: #4db6ac; margin-bottom:0px; padding-bottom: 40px; padding-top: 40px;";>
    <div class="col l7">
        <iframe style="padding:20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121115.43576415043!2d73.76361495820309!3d18.444784100000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295597687b7ff%3A0x7f6bac3bd1ebd090!2sOra%20Care%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1604926226018!5m2!1sen!2sin" width="850" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col l5">
    <div class="col map_col">
      <div class="card map_card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><h3>Contact us:</h3></span><br>
          <p1>SHOP NO 2 SHIVANJALI HEIGHTS NEAR NEW VISION ENGLISH SCHOOL,<br> Late Narayanrao Kondiba Jagtap Path,<br> opp. SCHOOL OF FASION TECHNOLOGY JSMP, Narhe,<br> Pune, Maharashtra 411041
            <br><br> E-mail : oracarenarhe@gmail.com
            <br> Phone : +919822818841
        </p1><br><br>
        <h5 style="color: #dce775; font-family: 'Work Sans', sans-serif;">WE ARE OPEN FROM MONDAY TO SATURDAY!
          <br> <br> 10:00 AM - 1:00 PM <br> 5:00 PM - 9:00 PM
        </h5>
        </div>
    </div>
  </div>
    </div>
</div>



<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Follow us on:</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">FACEBOOK</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">YOUTUBE</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">INSTAGRAM</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">TWITTER</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){

      $('.tabs').tabs();

    });
  </script>

</body>
</html>

