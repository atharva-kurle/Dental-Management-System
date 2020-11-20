
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
    
    </style>
</head>
<body>
    
<header>
    <nav class="nav-wrapper nav transparent z-depth-1">
            <a href="/admin" class="brand-logo"><img class="logo_img" src="img/logo.png" alt=""></a>
            <ul class="right nav_row">
                <li><a class="black-text nav_op" href="/book-offline">Book offline</a></li>
                <li><a class="black-text nav_op" href="/patient">Patients</a></li>
                <li><a class="black-text nav_op" href="logout">Logout</a></li>
            </ul>
    </nav>

</header>

<div class="container">
    <h3 class="red-text lighten-3 center">Book offline!</h3><br>
</div>


<div class="registration_wrap">
  <div class="container">
      <div class="row" id="logsign">
          <div class="col reg_col l5"style="margin-top: 0px;margin-left: 300px; border: 1px solid #dddada; height: 550px;">
              
              <div class="col l12 register">
                    <h5 class="center" style="font-family: 'Work Sans', sans-serif; margin-top:20px;">Appointment form</h5>
                   <form class="login_form" action="/book-offline" method="POST">
                     {{csrf_field() }}
                    <input type="text" name="user_name">
                    <label for="user_name">Enter a Username</label>
                    <input type="text" name="name">
                    <label for="name">Enter Name</label>
                    <input type="text" class="datepicker" name="date">
                    <label for="date">Enter Date</label><br>
                    <input type="text" name="time">
                    <label for="time">Enter Time</label><br>
                    <input type="text" name="phone">
                    <label for="password">Enter Phone number</label><br>
                    <button class="btn form_btn1" type="submit"style="margin-left: 163px;">Book</button>
                </form>

              </div>
             
          </div>
      </div>
  </div>
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
     M.Datepicker.init(elems,{format:'yyyy-mm-dd'});
  });

  

  </script>

</body>
</html>

