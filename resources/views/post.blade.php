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
     @foreach($blog as $blog_inner_post)
     <div class="col-sm-12">
        <h1>{{ $blog_inner_post->post_title }}</h1>
        <p>{{ $blog_inner_post->post_content }}</p>
     </div>
     @endforeach
  </div> 



</body>
</html>
