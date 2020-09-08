<?php

  header('Content-Type: application/json');
  include "database.php";

  $data = [];
  if (!$_GET['genre']) { // Se non ho nulla in GET, non applico nessun filtraggio dati
      $data = $database;
  } else {
      $genre = $_GET['genre']; // Estraggo il genere dal GET ricevuto dall'AJAX-JS
      foreach ($database['response'] as $cd) { // Scorro i record del database
          if ($cd['genre'] === $genre) { // Verifico se c'è un record che ha come chiave genre il $_GET['genre'] in output dall'AJAX-JS
              $data[] = $cd; // Lo aggiungo all'array $data[]
          }
      }
  }
  echo json_encode($data); // Restituisco il $data uscente dal codice sopra, in JSON

?>
