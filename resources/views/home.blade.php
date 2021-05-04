<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="jumbotron text-center">
  <ul class="navbar-nav">
        @foreach($home_nav as $navbar)
            <li class="nav-item" >
                <a class="nav-link" href="#">{{ $navbar }}</a>
            </li>
        @endforeach
   </ul>
</header>

<div class="jumbotron text-center">
  <h1>{{ $page_title }}</h1>
  <p>{{ $page_short_description }}</p> 
</div>
  
<div class="container">

  <div class="row" style="margin-bottom:50px;">
     <div class="col-sm-6" style="margin-top: auto;margin-bottom: auto;">
        <h2 style="max-width: 350px;text-align: center;margin: 0 auto;">{{ $page_sub_heading }}</h2>
     </div>
     <div class="col-sm-6">
        <p> {{ $page_sub_description }} </p>
     </div>
  </div>


  <div class="row" style="margin-bottom:50px;">
     <div class="col-sm-6" style="margin-top: auto;margin-bottom: auto;">
     <p> {{ $page_sub_heading_second_des }} </p>
     </div>
     <div class="col-sm-6">
        <h2 style="max-width: 350px;text-align: center;margin: 0 auto;">{{ $page_sub_heading_second }}</h2>
     </div>
  </div>

  <div class="row">
     @foreach($home_post as $post)
        <div class="col-sm-3">
        <h3>{{ $post['title'] }}</h3>
        <p>{{ $post['Description'] }}</p>
        </div>
     @endforeach
  </div>
</div>

</body>
</html>
