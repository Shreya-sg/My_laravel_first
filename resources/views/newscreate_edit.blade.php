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
        <form action="{{($newsslugpost) ? route('newspost.update'): route('newspost.save')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title"> News Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" placeholder="News Title">
            </div>
            <div class="form-group">
                <label for="news-slug">News Slug</label>
                <input type="text" class="form-control" id="news-slug" name="news-slug" placeholder="News Slug">
            </div>
            <div class="form-group">
                <label for="description">News Content</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="News Content">
            </div>
             
            @if($newsslugpost)
             <input type="hidden" name="id" value="{{$newsslugpost->id}}">
            @endif

            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
     </div>
    </div>
  </div>

</body>
</html>
