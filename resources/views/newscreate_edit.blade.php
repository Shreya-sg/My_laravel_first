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


  <div class="my_news_blog">
    <div class="container">
     <div class="row">
   
        <div class="col-md-12">
           @if($newsslugpost)
           <h1>{{ $newsslugpost ->title}}</h1>
           @else
           <h2>{{ 'Create Your New Post' }}</h2>
           @endif
        </div>
     </div>


    <div class="row" >
        <div class="col-md-12">
        <form action="/action_page.php" method="post">
            <div class="form-group">
                <label for="news-title"> News Title</label>
                <input type="text" class="form-control" id="news-title" aria-describedby="emailHelp" placeholder="News Title">
            </div>
            <div class="form-group">
                <label for="news-slug">News Slug</label>
                <input type="text" class="form-control" id="news-slug" placeholder="News Slug">
            </div>
            <div class="form-group">
                <label for="newscontent">News Content</label>
                <input type="text" class="form-control" id="newscontent" placeholder="News Content">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
     </div>
    </div>
  </div>

</body>
</html>
