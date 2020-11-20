
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
<h3 class="center red-text">Check-in</h3>
<h5 class="center red-text">Patient name : {{ $name }}</h5>
@if($flag == 1)
<h6 class="center red-text">Last visit on : {{ $book_date }}</h6>
@endif
<h6 class="center red-text">ID : {{ $id }}</h6><br><br>
<div class="container"style="border: 1px solid #dddada;padding: 30px;">
    <div class="row">
    <div class="col l6">
    <h5 class="center">Enter checkup fees : </h5><br>
    <h5 class="center">Enter follow-up date (if any) : </h5><br>
    <h5 class="center">Enter Time (if any) : </h5>
    </div>
    <div class="col l6">
    <form action="/checkin" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="text" name="amount"style="width: 50%;margin-top: 5px;">
    <input type="text" class="datepicker" name="date"style="width: 50%;margin-top: 5px;">
    <input type="text" name="time"style="width: 50%;margin-top: 15px;"><br><br><br>
    </div>
    </div>
    <input type="submit" class="btn " value="Save"style="width: 10%; margin-left: 58%;">
    </form>
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

