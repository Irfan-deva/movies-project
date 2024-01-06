<?php
// require '../views/home.view.php';
require rootPath('database/connection.php');
$query = "SELECT * FROM movies LIMIT 5";
$result =  mysqli_query($con, $query);
if (!$result) {
  echo 'error while fetching';
  die();
}
$movies = [];
while ($row = mysqli_fetch_assoc($result)) {
  $movies[] =  $row;
}

loadView('home', $movies);
