// Esercizio PHP-Ajax Dischi JS

// Area init

function init() {
  getData();

}

$(document).ready(init);

// Area funzioni
function getData() {
  $.ajax({
    url: 'database.php',
    method: 'GET',
    success: function(data) {

      console.log(data);
      var success = data.success;
      var response = data.response;

      var template = $('#disc-template').html();
      var compiled = Handlebars.compile(template);
      var target = $('#showcase');

      for (var i = 0; i < response.length; i++) {
        var poster = response[i].poster;
        var title = response[i].title;
        var author = response[i].author;
        var genre = response[i].genre;
        var year = response[i].year;

        var discHTML = compiled({
          'poster': poster,
          'title': title,
          'author': author,
          'genre': genre,
          'year': year
        });

        target.append(discHTML);

      }
    },
    error: function(err) {
      console.log(err);
    }
  });
}
