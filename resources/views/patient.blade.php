
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
    <h3 class="red-text lighten-3 center">Details</h3><br> 
  
 
      <div class="row" id="logsign">
          <div class="col reg_col l12" style="margin-top: 30px; margin-bottom: 50px;">
              <ul class="tabs">
                  <li class="tab col l5"><a class="black-text" href="#login">Patient Details</a></li>
                  <li class="tab col l5"><a class="black-text" href="#signup">Registered users <span class="new badge green"style="margin-left: 0px;margin-top: 10px;">4</span></a></li>
              </ul>
              <div class="col l12 register" id="login">
                
      <table class="striped">
        <thead>
          <tr>
              <th class="center">ID</th>
              <th class="center">User Name</th>
              <th class="center">Name</th>
              <th class="center">Phone</th>
              <th class="center">Book Date</th>
              <th class="center">Follow up</th>
              <th class="center">Time</th>
              <th class="center">Amout(Fees)</th>
              <th class="center">Actions</th>
          </tr>
        </thead>

        <tbody class="center">
          <tr class="center">
          @for($i=0; $i<$count_d; $i++)
          <td class="center">{{ $details[$i]['id'] }}</td>
            <td class="center">{{ $details[$i]['user_name'] }}</td>
            <td class="center">{{ $details[$i]['name'] }}</td>
            <td class="center">{{ $details[$i]['phone_no'] }}</td>
            <td class="center">{{ $details[$i]['book_date'] }}</td>
            <td class="center">{{ $details[$i]['follow_up'] }}</td>
            <td class="center">{{ $details[$i]['time'] }}</td>
            <td class="center">{{ $details[$i]['amount'] }}</td>
            <td class="center"><a href="edit?edituser={{$details[$i]['user_name']}}"><i class="material-icons">edit</i></a>
            <a href="delete?id={{$details[$i]['id']}}"><i class="material-icons">delete</i></a></td>
            </tr>
        @endfor
        </tbody>
      </table>
              </div>
              <div class="col l12 register" id="signup">
              <table>
        <thead>
          <tr>
              <th class="center">User Name</th>
              <th class="center">Phone</th>
              <th class="center">Registered on</th>
              <th class="center">Actions</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          @for($i=0;$i<$count_r; $i++)
            <td class="center">{{ $registered[$i]['username']}}</td>
            <td class="center">{{ $registered[$i]['phone']}}</td>
            <td class="center">{{ $registered[$i]['added_on']}}</td>
            <td class="center">
            <a href="/delete_r?user={{ $registered[$i]['username']}}"><i class="material-icons">delete</i></a></td>
          </tr>
          @endfor
        </tbody>
      </table>
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
  $(document).ready(function(){

$('.tabs').tabs();

});

  </script>

</body>
</html>

