
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
            <a href="" class="brand-logo"><img class="logo_img" src="img/logo.png" alt=""></a>
            <ul class="right nav_row">
                <li><a class="black-text nav_op" href="/book-offline">Book offline</a></li>
                <li><a class="black-text nav_op" href="/patient">Patients</a></li>
                <li><a class="black-text nav_op" href="logout">Logout</a></li>
            </ul>
    </nav>

</header>
<div class="row">
<div class="col l12">
<div class="container">
    <h2 class="red-text lighten-3 center">Welcome, DOC!</h2>
    <h4 class="center">You have pending appointments!</h4><br><br><br><br>
    <h5 class="center red-text lighten-3">Search for appointments</h5><br>
        <div style="width: 500px; margin-left: 27%;">
            <form action="/appointment" method="post">
            {{ csrf_field() }}
            <input type="text" class="datepicker center" name="app_date" placeholder="Enter date">
            <button class="btn waves-effect waves-light admin_app_btn center" type="submit" name="action">Search
                <i class="material-icons right">send</i>
            </button>
            </form>
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

