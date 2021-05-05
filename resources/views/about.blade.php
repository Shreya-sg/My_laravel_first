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

<div class="jumbotron text-center">
  <h1>{{ $about_title }}</h1>
  <p>{{ $about_short_description }}</p> 
</div>
  
<div class="container">

  <div class="row" style="margin-bottom:50px;">
     <div class="col-sm-6" style="margin-top: auto;margin-bottom: auto;">
        <h2 style="max-width: 350px;text-align: center;margin: 0 auto;">{{ $about_sub_heading }}</h2>
     </div>
     <div class="col-sm-6">
        <p> {{ $about_sub_description }} </p>
     </div>
  </div>

  <div class="row" style="margin-bottom:50px;">
     <div class="col-sm-6" style="margin-top: auto;margin-bottom: auto;">
        <h2 style="max-width: 350px;text-align: center;margin: 0 auto;">{{ $about_sub_heading  }}</h2>
     </div>
     <div class="col-sm-6">
        <p> {{ $about_sub_description }} </p>
     </div>
  </div>
<!-- 
  <div class="row" style="margin-bottom:50px;">
     @foreach($post as $posts)
     <div class="col-sm-12">
        <h1>{{ $posts->post_title }}</h1>
        <p>{{ $posts->post_description }}</p>
        <a href="/{{ $posts->post_slug }}">Read More</a>
     </div>
     @endforeach
  </div> -->


  <!-- <div class="row" style="margin-bottom:50px;">
     @foreach($post as $posts)
     <div class="col-sm-12">
        <h1>{{ $posts->post_title }}</h1>
        <p>{{ $posts->post_description }}</p>
        <!-- <a href="/{{ $posts->post_slug }}">Read More</a> -->
        <!-- <a href="{{ route('post.single', ['slug'=> $posts->post_slug])}}">Read More</a>
        <!-- <a href="http:/127.0.0.1:8000/about{{$posts->post_slug}}">Read More</a> -->
     </div>
     @endforeach
  </div> -->

</body>
</html>
