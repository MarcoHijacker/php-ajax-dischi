<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Ajax Dischi (Solo PHP)</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;600;800&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/d4368e456d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <script id="film-template" type="text/x-handlebars-template">
    <div class="disc-box">
      <span><img src="{{ poster }}"></span>
      <span>Titolo album: <b>{{ title }}</b></span>
      <span>Artista album: <b>{{ author }}</b></span>
      <span>Genere: {{ genre }}</span>
      <span>Anno: {{ year }}</span>
    </div>
  </script>
  </head>
  <body>

    <div id="showcase" class="container">

      <?php
        include 'database.php';
        foreach ($database['response'] as $reply => $record) {
            echo "<div class='disc'>";
            echo "<img src='" . $record['poster'] . "' width='300px' height='300px'>" . "<br>";
            echo "<span class='title'>" . $record['title'] . "</span><br>";
            echo "<span class='author'>" . $record['author'] . "</span><br>";
            echo "<span class='genre'>" . $record['genre'] . "</span><br>";
            echo "<span class='year'>" . $record['year'] . "</span><br>";
            echo "</div>";
        }
       ?>

    </div>

  </body>
</html>
