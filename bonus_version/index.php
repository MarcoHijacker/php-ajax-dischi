<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-Ajax Dischi (Variante AJAX) + Bonus Filtro Generi</title>
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
    <header>
      <div id="logo">
        <a href="#"><img src="https://cdn.iconscout.com/icon/free/png-256/spotify-11-432546.png" alt="spotify_logo" width="50px" height="auto"></a>
      </div>
      <div id="search">
        <span class="indicator">Filtra per genere:</span>
        <select id="genre" name="genre">
          <option value="All">Tutti</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
        <button id="btn" type="button" name="button">Invio</button>
      </div>
    </header>
    <div id="showcase" class="container">
    </div>
  </body>
</html>
