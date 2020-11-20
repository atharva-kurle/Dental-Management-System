
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
    <br><br><br>

    
  <div class="row">

     @for($i=0; $i<$count_d; $i++)

    <div class="col l6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title white-text">{{ $book_date[$i]['name']}}</span>
          <p> First visit<br>
          ID: {{ $book_date[$i]['id']}}<br>
          Phone: {{ $book_date[$i]['phone_no']}}<br>
          Time: {{ $book_date[$i]['time']}}<br>
              </p>
        </div>
        <div class="card-action">  
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="/checkin?id={{ $book_date[$i]['id']}}&required_date={{ $book_date[$i]['book_date']}}">Check-in</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="">Details</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="#">Postpone</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="#">Cancel</a></button>
        </div>
      </div>
    </div>
    @endfor

    
    @for($i=0; $i<$count_f; $i++)   


    <div class="col l6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title white-text" >{{ $follow_up[$i]['name']}}</span>
          <p> Follow up<br>
          ID: {{ $follow_up[$i]['id']}}<br>
          Phone: {{ $follow_up[$i]['phone_no']}}<br>
          Time: {{ $follow_up[$i]['time']}}<br>
              </p>
        </div>
        <div class="card-action">
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="/checkin?id={{ $follow_up[$i]['id']}}&required_date={{ $follow_up[$i]['follow_up']}}">Check-in</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="">Details</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="#">Postpone</a></button>
            <button class="btn-small" style = "margin:5px; width:100px;"><a class="center white-text" style = "margin:0px;" href="#">Cancel</a></button>
        </div>
      </div>
    </div>

    @endfor
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

