<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Ajax Dischi</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;600;800&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/d4368e456d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <script id="disc-template" type="text/x-handlebars-template">
    <div class="disc">
      <span><img src="{{ poster }}" width="300px" height="300px"></span><br>
      <span class="title">{{ title }}</span><br>
      <span class="author">{{ author }}</span><br>
      <span class="genre">{{ genre }}</span><br>
      <span class="year">{{ year }}</span>
    </div>
  </script>
  </head>
  <body>

    <div id="showcase" class="container">

    </div>

  </body>
</html>
