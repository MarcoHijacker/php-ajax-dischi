// Esercizio PHP-Ajax Dischi JS (Variante AJAX) + Bonus Filtro Generi

// Area init

function init() {
  getData();
  addGenreClickListener();
}

$(document).ready(init);

// Area funzioni

// Restituisci tutti i risultati dal server.php (database)
function getData() {
  $.ajax({
    url: 'server.php',
    method: 'GET',
    success: function(data) {

      var success = data.success;
      var response = data.response;

      var template = $('#disc-template').html();
      var compiled = Handlebars.compile(template);
      var target = $('#showcase');

      for (var i = 0; i < response.length; i++) {
        var record = response[i];
        console.log(record);
        var htmlRecord = compiled(record);

        target.append(htmlRecord);

      }
    },
    error: function(err) {
      console.log(err);
    }
  });
}

// Verifico se devo applicare un filtro di genere
function searchByGenre() {
    var select = $('select#genre');
    var genre = select.val();
    if (genre === 'All') {
        getData();
    } else {
        getDataByGenre(genre);
    }
}

// Invio il genere acquisito da jQuery in GET al server.php
function getDataByGenre(genre) {
    console.log('by genre ' + genre);
    $.ajax({
        url: "server.php",
        method: "GET",
        data: {
            'genre': genre
        },
        success: function(data) {
            printData(data);
        },
        error: function(err) {
            console.log('err', err);
        }
    });
}

// Stampo i risultati filtrati sulla base del data prodotto dalle linee 6-16 del server.php
function printData(data) {
    var source = $("#disc-template").html();
    var compiled = Handlebars.compile(source);
    var target = $('#showcase');
    target.html('');

    for (var i = 0; i < data.length; i++) {
        var cd = data[i];
        var htmlCd = compiled(cd);
        target.append(htmlCd);
    }
}

// Piazzo un listener sul bottone Invio accanto alla select-options
function addGenreClickListener() {
    var target = $("#btn");
    target.click(searchByGenre);
}
