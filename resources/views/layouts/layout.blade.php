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

    @yield('content')

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
        <a href="#"><button class="btn card-btn light-blue darken-4">BOOK</button></a>
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
                  <li class="tab col l6"><a class="black-text" href="#signup">SIGIN</a></li>
              </ul>
              <div class="col l12 register" id="login">
                    <h5>Welcome,</h5>
                <form action="" method="post">
                    <input type="text" name="user_name">
                    <label for="user_name">Enter your Username</label>
                    <input type="password" name="password">
                    <label for="user_name">Enter your Password</label><br>
                    <button class="btn" type="submit">Login</button>
                </form>

              </div>
              <div class="col l12 register" id="signup">
              <h5>Welcome,</h5>
                <form action="" method="post">
                    <input type="text" name="user_name">
                    <label for="user_name">Enter a Username</label>
                    <input type="password" name="password">
                    <label for="user_name">Enter a Password</label><br>
                    <input type="password" name="re_pass">
                    <label for="re_pass">Enter your Password again</label><br>
                    <input type="password" name="phone">
                    <label for="phone">Enter your Phone number</label><br>
                    <button class="btn" type="submit">Register</button>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="row" style="background-color: #4db6ac ";>
    <div class="col l7">
        <iframe style="padding:20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121115.43576415043!2d73.76361495820309!3d18.444784100000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295597687b7ff%3A0x7f6bac3bd1ebd090!2sOra%20Care%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1604926226018!5m2!1sen!2sin" width="850" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col l5">
    <div class="col map_col">
      <div class="card map_card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><h3>Contact us:</h3></span><br>
          <p>SHOP NO 2 SHIVANJALI HEIGHTS NEAR NEW VISION ENGLISH SCHOOL,<br> Late Narayanrao Kondiba Jagtap Path,<br> opp. SCHOOL OF FASION TECHNOLOGY JSMP, Narhe,<br> Pune, Maharashtra 411041
            <br><br> E-mail : xyz@example.com
            <br> Phone : +911233456778546
        
        </p>
        </div>
    </div>
  </div>
    </div>
</div>



<footer class="page-footer red">
    <div class="container">
        <div class="row">
            <div class="col l6 black-text">
                <h5>About me</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos, totam doloremque dolorum alias, aliquid deleniti eveniet maxime, voluptates molestiae consequuntur exercitationem vero</p><p> Exercitationem dicta assumenda maxime laudantium quaerat qui.</p>
            </div>
            <div class="col l2"></div>
            <div class="col l4 black-text">
                <h5>Connect</h5>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>YouTube</li>
                    <li>InstaGram</li>
                </ul>
            </div>
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

